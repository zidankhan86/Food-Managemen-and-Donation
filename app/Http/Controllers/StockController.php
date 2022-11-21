<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stock(){

        $stock_list=Stock::all();
        return view('backend.pages.stock.stock');
    }
    public function stock_form()
    {  
        
        return view('backend.pages.stock.stock_form');

    }  
    
    public function store(Request $request)
    {
            Stock::create([
            'quantity'=>$request->quantity,
            'item'=>$request->item,
            'type'=>$request->type
        ]);

        return redirect()->back();
    }
}
