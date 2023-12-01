<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();



Route::get('/',[\App\Http\Controllers\HomeController::class,'admin']);

Route::get('/category',[\App\Http\Controllers\Categorycontroller::class,'index']);
Route::get('/product',[\App\Http\Controllers\Productcontroller::class,'index']);

Route::get('/customer',[\App\Http\Controllers\CustomerController::class,'index']);
Route::get('/customer/show/{id}',[\App\Http\Controllers\CustomerController::class,'show']);
Route::get('/customer/search',[\App\Http\Controllers\CustomerController::class,'search']);
Route::get('/customer/store',[\App\Http\Controllers\CustomerController::class,'store']);
Route::get('/customer/update',[\App\Http\Controllers\CustomerController::class,'update']);
Route::get('/customer/delete/{id}',[\App\Http\Controllers\CustomerController::class,'delete']);