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

Route::resource('product',ProductController::class); // http://127.0.0.1:8000/product
Route::resource('category',CategoryController::class); // http://127.0.0.1:8000/category
// Route::get('product',[ProductController::class,'search']);
Route::delete('product',[ProductController::class,'destroy']);


Route::resource('shop',ShopController::class);
Route::resource('route',RouteController::class);
//Route::get('route/{id}/edit/','RouteController@edit');
//Route::get('/route/{id}/edit/', function () {
//   return view('Route.edit');
//});


//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/dashboard', function () {
//    return view('admin.dashboard');
//});
//
//Route::get('/User', function () {
//    return view('admin.user');
//});
//
//Route::get('/shop', function () {
//    return view('admin.shop');
//});
//
//Route::get('/privilage', function () {
//    return view('admin.privilage');
//});
//
//
//Route::get('/product', function () {
//    return view('admin.product');
//});
//
//Route::get('/report', function () {
//    return view('admin.report');
//});
//
//Route::get('/authentication', function () {
//    return view('admin.authentication');
