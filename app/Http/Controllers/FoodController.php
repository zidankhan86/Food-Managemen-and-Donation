<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\FoodRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            notify()->success('Food Added Successfully');
            return redirect()->back();

    }
    public function food_request(Request $request,$id){
            $food = Food::find($id);
            FoodRequest::create([
                'user_id'=>auth()->user()->id,
                'food_id'=>$food->id,
                'quantity'=>$request->quantity
            ]);
            Alert::success('Success !!!', 'Success Food Request');
            return back();
    }
    public function request_list(){
        $foodrequest=FoodRequest::with('food')->paginate(5);

       return view('backend.pages.food.food_request_list',compact('foodrequest'));
    }
    //Approve

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
                    'quantity'=>$food->quantity - $foodrequest->quantity,
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
        public function selectQauntity($id){
            $Food = Food::find($id);
            return view('frontend.pages.selectQuantity',compact('Food'));
        }



        // Add To Cart
        public function addToCart($id)
        {
            $Food = Food::find($id);

            //case 1: if cart empty
            $getCart = session()->get('cart');
            if (empty($getCart)) {
                    $newCart = [
                        $Food->id => [
                            'id' => $Food->id,
                            'name' => $Food->food_name,
                            'quantity' => 1,
                            'image' => $Food->image,

                        ]
                    ];
                    session()->put('cart', $newCart);
                    notify()->success('success','product added to cart success');
                return view('frontend.pages.layouts.cart');
                }

            //step 2 : cart not empty

            if(array_key_exists($id,$getCart)){
               //product exist
                $getCart[$id]['quantity']=$getCart[$id]['quantity']+1;
                notify()->success('success','product updated in cart');
                \session()->put('cart',$getCart);

            }else
            {
                //product not exist

                $getCart[$id]=[
                    'id' => $Food->id,
                    'name' => $Food->name,
                    'quantity' => 1,
                    'image' => $Food->image,
                ];
                notify()->success('success','product added to cart success');

                \session()->put('cart',$getCart);
            }


            return view('frontend.pages.layouts.cart');
        }

}
