<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer(){
        $customer=Customer::all();
        return view('backend.pages.customer.customer',compact('customer'));
        
    }
    public function customer_form(){
        // return view('backend.pages.customer.customer_form');
        return view('backend.pages.customer.customer_form');
    }
    public function store(Request $req){

        $req->validate([

            'customer_name'=>'required',
            
            'contract'=>'required'
        ],
        
        [

            'customer_name'=>'Name not given'
          

        ]);
        
        Customer::create([
            "customer_name" => $req->customer_name,
            "customer_email" => $req->email,
            "contract" => $req->contract,
            "customer_address" =>$req->address,
            "gander" =>$req->gander 
        ]);
        // dd($req->all());
        return redirect()->route('customer.list');
        
    }
}
