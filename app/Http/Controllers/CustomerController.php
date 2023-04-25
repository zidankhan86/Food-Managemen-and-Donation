<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer(){
        //$customer=Customer::paginate(5);
        $customer=Customer::paginate(5);
        return view('backend.pages.customer.customer',compact('customer'));

    }
    public function customer_form(){
         
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
        return redirect()->back();

    }
    public function edit($customer_id){
        $customer_data=Customer::find($customer_id);
        return view('backend.pages.customer.edit',compact('customer_data'));

    }

    public function update(REQUEST $req,$customer_id){

        $customer_update=Customer::find($customer_id);
        $customer_update->update([
            "customer_name" => $req->customer_name,
            "customer_email" => $req->email,
            "contract" => $req->contract,
            "customer_address" =>$req->address,
            "gander" =>$req->gander

        ]);
        notify()->success('Customer Updated Successfully');
        return redirect()->route('customer');
    }
    public function delete($delete_id){

        $delete=Customer::find($delete_id);
        $delete->delete();
        return redirect()->route('customer');
    }

}
