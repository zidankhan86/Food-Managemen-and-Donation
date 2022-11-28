<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){

      return view('backend.pages.login'); 
    }

    public function login_process(Request $request)
    {
       
       $crediantials=$request->except('_token');
       if(Auth::attempt($crediantials))
       {
          return redirect()->route('admin');

       }

       //return redirect()->back();

    }

    public function Logout()
    {
      Auth::logout();
      
      return redirect()->route('show.login');
    }

}
