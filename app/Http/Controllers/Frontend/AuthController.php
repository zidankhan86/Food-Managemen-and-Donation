<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin(Request $req){

        

            User::create([

            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'password'=>bcrypt($req->password),
            'role'=>'organization'

            ]);

           // dd($req->all());

           

            return redirect()->back();

        
    }

public function login(Request $req){

    $login=$req->except('_token');

    if(Auth::attempt($login))
    {
        return redirect()->route('home');
    }
    return redirect()->back();


}
public function Logout_frontend(){
        Auth::logout();
        return redirect()->route('home');

}

}
