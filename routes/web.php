<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('product',ProductController::class);
Route::resource('category',CategoryController::class);
Route::delete('product',[ProductController::class,'destroy']);


Route::resource('shop',ShopController::class);
Route::resource('route',RouteController::class);
//Route::get('route/{id}/edit/','RouteController@edit');
//Route::get('/route/{id}/edit/', function () {
//   return view('Route.edit');
//});
//
//Route::get('shop/map','ShopController@gmap');


Route::get('show2', [App\Http\Controllers\RouteController::class,'show2']);


