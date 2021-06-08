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

  Route::get('/login', function () {
    
      return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
    
});
Route::view('register', 'register');
Route::post('login',[UserController::class,'login']);
Route::get('home',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('search',[ProductController::class,'search']);
Route::post('addToCart',[ProductController::class,'addToCart']);
Route::get('cartList',[ProductController::class,'cartList']);
Route::get('remove/{id}',[ProductController::class,'removeCart']);
Route::get('orderNow',[ProductController::class,'orderNow']);
Route::get('myOrders',[ProductController::class,'myOrders']);
Route::post('orderPlace',[ProductController::class,'orderPlace']); 
Route::post('register',[UserController::class,'register']); 


