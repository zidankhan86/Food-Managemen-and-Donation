<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function help(){

        return view('backend.pages.help.help');
    }
    public function help_form(){

        return view('backend.pages.help.help_form');
    }
}
