<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donate(){

return view('backend.pages.donate.donate');
    }
    public function donate_form(){

        return view('backend.pages.donate.donate_form');
            }

    
}
