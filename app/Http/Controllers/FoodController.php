<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodRequest;
use App\Models\User;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function list(){
        $food=Food::paginate(5);

        return view('backend.pages.food.foodlist',compact('food'));
    }

    public function food_create(){
        $users=User::get();
        return view('backend.pages.food.foodform',compact('users'));
    }
    public function food_store(Request $req){
        //  dd($req->all());
$req->validate(
[
'food_name'=>'required',
'user_id'=>'required',
'quantity'=>'required',
'image'=>'required'
]
);

        $imageName=null;
        if ($req->hasFile('image')) {
            $imageName=date('Ymdhsis').'.'.$req->file('image')->getClientOriginalExtension();
            $req->file('image')->storeAs('/uploads', $imageName);
        }

        //dd($imageName);
            Food::create([
                "food_name"=>$req->food_name,
                "user_id"=>$req->user_id,
                "quantity"=>$req->quantity,
                "image"=>$imageName
            ]);
            return redirect()->back();
    }
    public function food_request($id){
            $food = Food::find($id);
            FoodRequest::create([
                'user_id'=>auth()->user()->id,
                'food_id'=>$food->id
            ]);
            return back();
    }
    public function request_list(){
        $foodrequest=FoodRequest::paginate(5);

       return view('backend.pages.food.food_request_list',compact('foodrequest'));
    }

        public function approve($id){
            $foodrequest = FoodRequest::find($id);
            $food = Food::where('id',$foodrequest->food_id)->first();
            // dd($food);
            if($food->quantity >=0 ){
                $foodrequest->update([
                    'status'=>'approve'
                ]);
                $food = Food::where('id',$foodrequest->food_id)->first();

                $food->update([
                    'quantity'=>$food->quantity - 1,
                ]);
                notify()->success('Food Request Approved');
            }else{
                notify()->error('Food quantity is low ');
            }

            return back();

        }
        public function reject($id){
            $foodrequest = FoodRequest::find($id)->update([
                'status'=>'rejected'
            ]);
            notify()->error('Food Request Reject');
            return back();

        }
        public function food_frontend(){

        return view('frontend.pages.foodFrontend');

        }
        
        public function foodFrontend(Request $request){
            $imageName=null;
            if ($request->hasFile('image')) {
                $imageName=date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('/uploads', $imageName);
            }
            Food::create([
                'food_name'=>$request->food_name,
                'user_id'=>auth()->user()->id,
                'quantity'=>$request->quantity,
                'image'=>$imageName
            ]);
            return back();
        }
        public function food_delete($food_id){

            $delete=Food::find($food_id);
            $delete->delete();
            notify()->success('Delete Successful');
            return redirect()->route('food.list');
        }

}
