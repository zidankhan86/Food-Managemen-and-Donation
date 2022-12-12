<?php

namespace App\Http\Controllers;

use App\Models\FoodRequest;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function organization()
    {

        $org=Organization::paginate(5);
        return view(('backend.pages.organization.organization'),compact('org'));
    }
    public function organization_form()
    {

        return view('backend.pages.organization.organization_form');
    }
    public function store(Request $req)
    {
        $req->validate([
          'name' =>'Required',
          'details'=>'Required'

        ]);


        Organization::create([

            //column name - input field name

            "name" => $req-> name,
            //"id" => $req->id,
            "details" => $req->details,


        ]);
        return redirect()->back();
    }

    public function profile()
    {
        $ngoFoodRequest = FoodRequest::where('user_id',auth()->user()->id)->get();
        // dd($ngoFoodRequest);
        return view('frontend.pages.profile.profile',compact('ngoFoodRequest'));
    }
}
