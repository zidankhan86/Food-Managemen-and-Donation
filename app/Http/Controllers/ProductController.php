<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return  view('backend.pages.product.product');
    
    }
        public function product_list(){
            return  view('backend.pages.product.product_form');
        }
public function store(Request  $req){

    Product::create([


    ]);
}
}
