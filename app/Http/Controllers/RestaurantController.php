<?php

namespace App\Http\Controllers;

use App\Models\Restaurent;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function restaurant(){

        return view('backend.pages.restaurent.restaurent');
    
    }
    
        public function restaurant_form(){
    
            return view('backend.pages.restaurent.restaurent_form');
        }
public function store( request $req){
   // dd($req->all);

    Restaurent::create([
        "name"=>$req->name,
        "location"=>$req->location,
        "image"=>$req->image,
        "description"=>$req->description

]);
}

}

