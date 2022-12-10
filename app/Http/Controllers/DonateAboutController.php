<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateAboutController extends Controller
{
    public function donate_about(){


      return view('frontend.pages.restaurant');
    }
    public function visitor_donate(){
return view('frontend.pages.donateabout.donateabout');

    }
}
