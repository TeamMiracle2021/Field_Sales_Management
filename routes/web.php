<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypeController;





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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('product',ProductController::class);
Route::resource('category',CategoryController::class);
//Route::delete('product',[ProductController::class,'destroy']);
Route::resource('shop',ShopController::class);
Route::resource('route',RouteController::class);
Route::resource('user',UserController::class);
Route::resource('usertype',UserTypeController::class);


Route::resource('report',\App\Http\Controllers\ReportController::class);


Route::get('/show2/{id}', [RouteController::class, 'show2'])->name('route.show2');
Route::get('/route/create/getlatlng', [RouteController::class, 'getlatlng'])->name('route.getlatlng');
Route::get('/rep/shops', [ShopController::class, 'shopreport'])->name('shop.shopreport');
Route::get('/rep/product', [ProductController::class, 'productreport'])->name('product.productreport');
Route::get('/rep/route', [RouteController::class, 'routereport'])->name('route.routereport');
//Route::get('/rep/user', [UserController::class, 'userreports'])->name('ser.userreports');











