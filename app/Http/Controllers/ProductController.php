<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_list(){
        return  view('backend.pages.product.product_list');
    
    }
        public function product_form(){
            return  view('backend.pages.product.product_form');
        }
public function product_store(Request  $req){
    // dd($req->all());

    Product::create([
        'name'=>$req->name ,
        'category'=>$req->category,
        'price'=>$req->price,
        'stock'=>$req->stock,
        'image'=>$req->image,
        'color'=>$req->color

    ]);
    return redirect()->back();
}
}
