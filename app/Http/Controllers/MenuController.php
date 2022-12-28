<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
        $dishes=Food::all();
        return view('frontend.pages.menu', compact('dishes'));

    }
    public function gallery(){

        return view('frontend.pages.gallery');
    }

    public function details($dishes_id)
    {
        $foodDetails=Food::find($dishes_id);
        return view('frontend.pages.details',compact('foodDetails'));
    }
}
