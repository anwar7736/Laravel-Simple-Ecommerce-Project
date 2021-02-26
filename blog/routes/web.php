<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::post('/register', [UserController::class, 'Register']);
Route::post('/login', [UserController::class, 'Login']);
Route::get('/logout', [UserController::class, 'Logout']);

Route::group(['middleware'=> 'check_login'], function(){
	Route::view('/login', 'login');
	Route::view('/register', 'register');
});
Route::group(['middleware'=> 'check_session'], function(){
	Route::get('/cart_list', [ProductController::class, 'CartList']);
});
Route::view('/', 'product');	
Route::get('/', [ProductController::class, 'index']);
Route::get('/ordered', [ProductController::class, 'PlaceOrder']);
Route::get('/details/{id}', [ProductController::class, 'details']);
Route::get('/remove_cart/{id}', [ProductController::class, 'RemoveCart']);
Route::get('/order_list', [ProductController::class, 'Order_List']);
Route::post('/add_to_cart', [ProductController::class, 'AddtoCart']);
Route::post('/search_item', [ProductController::class, 'SearchItem']);
Route::post('/payment', [ProductController::class, 'paymentMehod']);
