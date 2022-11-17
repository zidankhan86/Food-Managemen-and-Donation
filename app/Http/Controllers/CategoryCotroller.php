<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryCotroller extends Controller
{
    public function Category(){
        $category=Category::all();

        return view('backend.pages.category.category',compact('category'));
    }
    public function Category_form(){
        return view('backend.pages.category.category_form');
    }
    public function store(Request $req){

        //dd($req->all());
        $req->validate([
            'name'=>'required',
            'c_type'=>'required'
        ]);

        Category::create([
            "name" =>$req->name,
            "c_type" =>$req->c_type,
            "status" =>$req->status,
            
         ]);  
        return redirect()->back();


        
    }
}
