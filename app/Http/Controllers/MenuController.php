<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
        $dishes=Product::all();
        return view('frontend.pages.menu', compact('dishes'));

    }
}
