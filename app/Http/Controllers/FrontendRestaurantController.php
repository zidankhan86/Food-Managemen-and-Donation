<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendRestaurantController extends Controller
{
    public function restaurant_frontend(){

return view('frontend.pages.restaurant');


    }
}
