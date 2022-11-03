<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryCotroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProductController;

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
Route::get('/product',[ProductController::class,'list']);
Route::get('/customer',[CustomerController::class,'Customer']);
Route::get('/branch',[BranchController::class,'Branch']);

Route::get('/organization',[OrganizationController::class,'Organization']);

Route::get('/category',[CategoryCotroller::class,'Category']);
Route::get('/category/form',[CategoryCotroller::class,'Category_form']);