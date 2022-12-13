<?php

namespace App\Http\Controllers;

use App\Models\FoodRequest;
use Illuminate\Http\Request;

class ReportCotroller extends Controller
{
    public function report_generate(Request $request){
        if($request->from_date &&  $request->to_date){
            $startDate = $request->from_date;
        $endDate = $request->to_date;
        $foodrequest = FoodRequest::whereBetween('created_at',[$startDate,$endDate])->get();

        return view('backend.pages.report',compact('foodrequest'));
        }else{
            $foodrequest = FoodRequest::get();
            return view('backend.pages.report',compact('foodrequest'));
        }


    }
   // public function report_generate()

}
