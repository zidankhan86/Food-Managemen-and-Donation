<?php

namespace App\Http\Controllers;

use App\Models\FoodRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard( ){
        $totalRequest = FoodRequest::count();
        $totalNgo = User::where('role','organization')->count();
        $totalRes = User::where('role','restaurant')->count();
    return view('backend.pages.dashboard.dashboard',compact('totalRequest','totalNgo','totalRes'));
}
}
