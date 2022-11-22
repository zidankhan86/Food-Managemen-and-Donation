<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_list(){
        $product_list=Product::all();
        return  view('backend.pages.product.product_list',compact(('product_list')));
    
    }
        public function product_form(){
            return  view('backend.pages.product.product_form');
        }
public function product_store(Request  $req){
    // dd($req->all());
$req->validate([
'name'=>'required',
'price'=>'required',
'stock'=>'required'
]);
    $imageName=null;
    if($req->hasFile('image'))
    {
        $imageName=date('Ymdhmi').'.'.$req->file('image')->getClientOriginalExtension();
        $req->file('image')->storeAs('/uploads',$imageName);
    }

    Product::create([
        'name'=>$req->name ,
        'category'=>$req->category,
        'price'=>$req->price,
        'stock'=>$req->stock,
        'image'=>$imageName,
        'color'=>$req->color

    ]);
    return redirect()->back();
}
}
