<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryCotroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HelpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RestaurantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class,'admin']);
Route::get('/dashboard',[DashboardController::class,'Dashboard']);

Route::get('/product',[ProductController::class,'product']);
Route::get('/product/form',[ProductController::class,'product_list']);

Route::get('/customer',[CustomerController::class,'Customer'])->name("customer.list");
Route::get('/customer/form',[CustomerController::class,'customer_form']);
Route::post("/customer/store", [CustomerController::class,"store"])->name("customer.store");

Route::get('/branch',[BranchController::class,'Branch']); 

Route::get('/organization',[OrganizationController::class,'Organization']);
Route::get('/organization/form',[OrganizationController::class,'Organization_form']);

Route::get('/category',[CategoryCotroller::class,'Category']);
Route::get('/category/form',[CategoryCotroller::class,'Category_form']);

Route::get('/help',[HelpController::class,'Help']);
Route::get('/help/form',[HelpController::class,'help_form']);

Route::get('/restaurent',[RestaurantController::class,'restaurant']);
Route::get('/restaurent/form',[RestaurantController::class,'restaurant_form']);

Route::get('/donate',[DonateController::class,'donate']);
Route::get('/donate/form',[DonateController::class,'donate_form']);
