<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stock(){

        return view('backend.pages.stock.stock');
    }
    public function stock_form(){

        return view('backend.pages.stock.stock_form');
    }
}
