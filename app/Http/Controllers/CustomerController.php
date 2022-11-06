<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer(){
        return view('backend.pages.customer.customer');
    }
    public function customer_form(){
        // return view('backend.pages.customer.customer_form');
        return view('backend.pages.customer.customer_form');
    }
    public function store(Request $req){
        
        Customer::create([
            "customer_name" => $req->customer_name,
            "customer_email" => $req->email,
            "customer_address" =>$req->address,
            "gander" =>$req->gander 
        ]);
        // dd($req->all());
        return redirect()->route('customer.list');
    }
}
