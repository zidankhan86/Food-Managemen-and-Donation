<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryCotroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\StockController;


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

Route::get('/product',[ProductController::class,'product_list'])->name('product.list');
Route::get('/product/form',[ProductController::class,'product_form'])->name('product.form');
Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');

Route::get('/customer',[CustomerController::class,'Customer'])->name("customer.list");
Route::get('/customer/form',[CustomerController::class,'customer_form'])->name("customer.form");
Route::post("/customer/store", [CustomerController::class,"store"])->name("customer.store");

Route::get('/branch',[BranchController::class,'Branch']); 

Route::get('/organization',[OrganizationController::class,'Organization']);
Route::get('/organization/form',[OrganizationController::class,'Organization_form'])->name('Organization.form');
Route::post('/organization/store',[OrganizationController::class,'store'])->name('organization.store');

Route::get('/category',[CategoryCotroller::class,'Category']);
Route::get('/category/form',[CategoryCotroller::class,'Category_form']);
Route::post('/category/store',[CategoryCotroller::class,"store"]);

Route::get('/stock',[StockController::class,'Stock']);
Route::get('/stock/form',[StockController::class,'Stock_form'])->name('stock.form');
Route::post('/stock/store',[StockController::class,"store"])->name('stock.store');

Route::get('/restaurent',[RestaurantController::class,'restaurant'])->name('restaurant.list');
Route::get('/restaurent/form',[RestaurantController::class,'restaurant_form']);
Route::post('/restaurent/store',[RestaurantController::class,"store"])->name("restaurent.store");

Route::get('/donate',[DonateController::class,'donate'])->name('donate.list');
Route::get('/donate/form',[DonateController::class,'donate_form'])->name('donate.form');
Route::post('/donate/store',[DonateController::class,'store'])->name('donate.store');
