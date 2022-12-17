<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function contract_frontend(){

return view('frontend.pages.contract');

    }
    public function contract_us(Request $request){
        Contract::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message

        ]);
        return redirect()->back();


    }
}
