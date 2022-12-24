<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function signin(Request $req){
            $req->validate([
                'name'=>'required',
                'email'=>'required|unique:users,email',
                'address'=>'required',
                'phone'=>'required|digits:11',
                'password'=>'required|min:5',


            ]);


            User::create([

            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'password'=>bcrypt($req->password),
            'role'=>$req->role

            ]);

           // dd($req->all());
           Alert::success('Success', 'Success Registration');


            return redirect()->back();


    }

public function login(Request $req){
 $req->validate([

    'email'=>'required',
    'password'=>'required'

 ]);

    $login=$req->except('_token');

    if(Auth::attempt($login))
    {
        return redirect()->route('home');
    }
    Alert::success('Success', 'Success Login');
    return redirect()->back();


}
public function Logout_frontend(){
        Auth::logout();
        Alert::success('Success', 'Success logout');
        return redirect()->route('home');

}

}
