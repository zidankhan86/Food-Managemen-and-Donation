<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
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
        Donate::create([
            'donatator_name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'amount' => $req->amount
        ]);
        return redirect()->route('donate.list');
    }
}
