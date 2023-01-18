<?php

namespace App\Http\Controllers\api;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function food(){

        $foods= Food::all();
        return response()->json($foods);
    }
    public function food_create(Request $request){
        $validation=Validator::make($request->all(),[
            'food_name'=>'required',
            'image'=>'required',
            'id'=>'required'

        ]);


    }
}
