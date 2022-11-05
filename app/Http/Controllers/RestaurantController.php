<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function restaurant(){

        return view('backend.pages.restaurent.restaurent');
    }
    public function restaurent_form(){
        return view('backend.pages.restaurent.restaurent_form');
    }
}
