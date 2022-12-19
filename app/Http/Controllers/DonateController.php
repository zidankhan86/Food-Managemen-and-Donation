<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{

    public function payment_list(){
        $paymentList=Donate::all();

        return view('backend.pages.payment.payement', compact('paymentList'));
    }

    public function donate()
    {

        $donate = Donate::paginate(5);

        return view('backend.pages.donate.donate', compact('donate'));
    }
    public function donate_form()
    {
        return view('backend.pages.donate.donate_form');
    }


    public function store(Request $req)
    {

        $req->validate([
'name'=>'Required',
'phone'=>'Required',
'amount'=>'Required'

        ]);
        // dd($req->all());
       // Donate::create([ ]);
        //return redirect()->route('donate.list');
    }
    public function payment(Request $request){

        Donate::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'city_name'=>$request->city_name,
            'phone'=>$request->phone,
            'amount'=>$request->amount,
            'message'=>$request->message


        ]);
        return redirect()->back();
    }
}
