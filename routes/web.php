<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportCotroller;
use App\Http\Controllers\StockController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\CategoryCotroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\DonateAboutController;
use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\FrontendRestaurantController;

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

// SSLCOMMERZ Start


Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('ssl.payment');
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

//SSLCOMMERZ END

//frontend


Route::get('/',[WebController::class,'home'])->name('home');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/about/donate',[DonateAboutController::class,'donate_about'])->name('doante.about');
Route::get('/contract',[ContractController::class,'contract_frontend'])->name('contract');
Route::post('/contract/us',[ContractController::class,'contract_us'])->name('contract.us');
Route::post('donate/payment',[DonateController::class,'payment'])->name('donate.payment');
Route::get('/restaurant_frontend',[FrontendRestaurantController::class,'restaurant_frontend'])->name('restaurant.frotend');
Route::get('/visitor/donate',[DonateAboutController::class,'visitor_donate'])->name('visitor.donate');
Route::post('/user/signin',[AuthController::class,'signin'])->name('signin');
Route::post('/user/login',[AuthController::class,'login'])->name('login');
Route::get('/menu/dishes',[MenuController::class,'menu'])->name('menu.dishes');
Route::get('/menu/dishes/details/{dishes_id}', [MenuController::class, 'details'])->name('menu.dishes.details');
Route::post('/restaurant/donate',[RestaurantController::class,'donateForm'])->name('restaurant.donateForm');

Route::get('/food/frontend',[FoodController::class,'food_frontend'])->name('food.frontend');
Route::post('/food/frontend-submit',[FoodController::class,'foodFrontend'])->name('food.foodFrontend');

Route::get('/report/generate',[ReportCotroller::class,'report_generate'])->name('report.generate');
Route::post('/report/generate/submit',[ReportCotroller::class,'report_generate'])->name('report.generate.submit');
Route::get('/gallery',[MenuController::class,'gallery'])->name('gallery');


    Route::group(['middleware'=>'auth'], function(){

    Route::get('/logout_frontend',[AuthController::class,'Logout_frontend'])->name('Logout_frontend');

});


//backend


Route::get('/login',[LoginController::class,'showLogin'])->name('show.login');
Route::post('/login/process', [LoginController::class, 'login_process'])->name('login.process');




Route::group(['middleware'=>'auth','adminchecker','prefix'=>'admin'], function()
{

    Route::get('/logout', [LoginController::class, 'Logout'])->name('admin.logout');

    Route::get('/',[HomeController::class,'admin'])->name('admin');
    Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard');

    Route::get('/product',[ProductController::class,'product_list'])->name('product.list');
    Route::get('/product/form',[ProductController::class,'product_form'])->name('product.form');
    Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');
    Route::get('/product/edit/{product_id}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/product/update/{product_id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/delete/product/{delete_id}',[ProductController::class,'delete_product'])->name('product.delete');

    Route::get('/customer',[CustomerController::class,'Customer'])->name('customer');
    Route::get('/customer/form',[CustomerController::class,'customer_form'])->name('customer.form');
    Route::post('/customer/store', [CustomerController::class,'store'])->name('customer.store');
    Route::get('/edit/customer/{customer_id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::put('/customer/update/{customer_id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/customer/delete/{delete_id}',[CustomerController::class,'delete'])->name('customer.delete');

    Route::get('/branch',[BranchController::class,'Branch']);

    Route::get('/organization',[OrganizationController::class,'Organization'])->name('organization');
    Route::get('/organization/form',[OrganizationController::class,'Organization_form'])->name('Organization.form');
    Route::post('/organization/store',[OrganizationController::class,'store'])->name('organization.store');

    Route::get('/category',[CategoryCotroller::class,'Category'])->name('Category');
    Route::get('/category/form',[CategoryCotroller::class,'Category_form'])->name('Category_form');
    Route::post('/category/store',[CategoryCotroller::class,'store'])->name('store');
    Route::get('/category/edit/{category_id}',[CategoryCotroller::class,'edit'])->name('category.edit');
    Route::put('/category/update/{category_id}',[CategoryCotroller::class,'update'])->name('category.update');
    Route::get('/category/delete{delete_id}',[CategoryCotroller::class,'category_delete'])->name('category.delete');

    Route::get('/stock',[StockController::class,'Stock']);
    Route::get('/stock/form',[StockController::class,'Stock_form'])->name('stock.form');
    Route::post('/stock/store',[StockController::class,"store"])->name('stock.store');

    Route::get('/restaurant',[RestaurantController::class,'restaurant'])->name('restaurant.list');
    Route::get('/restaurant/form',[RestaurantController::class,'restaurant_form'])->name('restaurant_form');
    Route::post('/restaurant/store',[RestaurantController::class,'store'])->name('restaurent.store');
    Route::post('restaurant/donate',[RestaurantController::class,'restaurant_donate'])->name('restaurant.donate');

    Route::get('/donate',[DonateController::class,'donate'])->name('donate.list');
    Route::get('/donate/form',[DonateController::class,'donate_form'])->name('donate.form');
    Route::post('/donate/store',[DonateController::class,'store'])->name('donate.store');
    Route::get('/payment/list',[DonateController::class,'payment_list'])->name('payment.list');

    Route::get('/food',[FoodController::class,'list'])->name('food.list');
    Route::get('/food/create',[FoodController::class,'food_create'])->name('food.create');
    Route::post('/food/store',[FoodController::class,'food_store'])->name('food.store');
    Route::get('/delete/food/{food_id}',[FoodController::class,'food_delete'])->name('food.delete');



    Route::get('/approve/{id}',[FoodController::class,'approve'])->name('approve');
    Route::get('/reject/{id}',[FoodController::class,'reject'])->name('reject');

Route::get('/organization/profile',[OrganizationController::class,'profile'])->name('org.profile');
Route::put('/profile/update',[OrganizationController::class,'update'])->name('profile.update');

Route::get('/request/list',[FoodController::class,'request_list'])->name('requestFor.food');
});
Route::group(['middleware'=>'CheckOrganizationMiddleware'],function(){
    Route::get('food/request/select-quantity/{food_id}',[FoodController::class,'selectQauntity'])->name('food.request.selectQauntity');
    Route::post('food/request/{food_id}',[FoodController::class,'food_request'])->name('food.request');
});


