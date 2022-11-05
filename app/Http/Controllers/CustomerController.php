<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function Customer(){
        return view('backend.pages.customer.customer');
    }
    public function Customer_form(){
        return view('backend.pages.customer.customer_form');
    }
}
