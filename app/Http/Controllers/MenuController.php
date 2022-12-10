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
}
