<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;





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


Route::resource('report',\App\Http\Controllers\ReportController::class);
Route::get('/show2/{id}', [RouteController::class, 'show2'])->name('route.show2');


Route::get('/report/product', [RouteController::class, 'productreport'])->name('report.productreport');
Route::get('/rep/product', [ProductController::class, 'index1'])->name('product.index1');









