<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryCotroller extends Controller
{
    public function Category(){
        $category=Category::paginate(5);

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
         notify()->success('category created successfully', 'success');
        return redirect()->back();



    }

    public function edit($category_id){
        $category_data=Category::find($category_id);

return view('backend.pages.category.edit',compact('category_data'));
    }
    public function update(Request $request,$category_id){

    $category_update=Category::find($category_id);
    $category_update->update([
        "name" =>$request->name,
        "c_type" =>$request->c_type,
        "status" =>$request->status
    ]);

    notify()->success('Category updated successfully!');
    return redirect()->route('Category');

    }
    public function category_delete(){ 



    }
}
