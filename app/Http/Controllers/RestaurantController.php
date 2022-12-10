<?php

namespace App\Http\Controllers;

use App\Models\RestaurantFrontend;
use App\Models\Restaurent;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function restaurant(){
        $restaurant=Restaurent::paginate(5);
        return view('backend.pages.restaurent.restaurent',compact('restaurant'));


    }

        public function restaurant_form(){

            return view('backend.pages.restaurent.restaurent_form');
        }
public function store( request $req){
   // dd($req->all);


   $req->validate([
'name'=>'required',
'location'=>'required'

   ]);

    Restaurent::create([
        "name"=>$req->name,
        "location"=>$req->location,
        "image"=>$req->image,
        "description"=>$req->description

    ]);
    return redirect()->route('restaurant.list');

    }


    public function donateForm(Request $request)
    {

        $donateImage=null;
        if($request->hasFile('image'))
        {
            $donateImage=date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/', $donateImage);
        }

        RestaurantFrontend::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'dish_item'=>$request->dish_item,
            'price'=>$request->price,
            'contract'=>$request->contract,
            'description'=>$request->description,
            'image'=>$donateImage,
            'quantity'=>$request->quantity
        ]);

        return redirect()->back();
    }


}

