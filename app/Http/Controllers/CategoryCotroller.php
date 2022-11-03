<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryCotroller extends Controller
{
    public function Category(){
        return view('backend.pages.category.category');
    }
    public function Category_form(){
        return view('backend.pages.category.category_form');
    }
}
