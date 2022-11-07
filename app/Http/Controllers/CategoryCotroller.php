<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryCotroller extends Controller
{
    public function Category(){
        return view('backend.pages.category.category');
    }
    public function Category_form(){
        return view('backend.pages.category.category_form');
    }
    public function store(Request $req){
        //dd($req->all());
 
        Category::create([
            "name" =>$req->name,
            "image" =>$req->image,
            "c_type" =>$req->c_type,
            "status" =>$req->status
        
         ]);  
        return redirect()->back();


        
    }
}
