<?php

namespace App\Http\Controllers;

use App\Models\Food;
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
        // dd($req);
            Food::create([
                "food_name"=>$req->food_name,
                "user_id"=>$req->user_id,
                "quantity"=>$req->quantity
            ]);
            return redirect()->back();
    }
}
