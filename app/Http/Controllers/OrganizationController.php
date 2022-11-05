<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function organization(){

return view('backend.pages.organization.organization');

    }
   public function organization_form(){

    return view('backend.pages.organization.organization_form');
   }

}
