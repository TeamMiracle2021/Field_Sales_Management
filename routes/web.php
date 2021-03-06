<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\membercontroller;

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
});

Route::resource('route',RouteController::class);




Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/User', function () {
    return view('admin.user');
});

Route::get('/shop', function () {
    return view('admin.shop');
});

Route::get('/privilage', function () {
    return view('admin.privilage');
});


Route::get('/product', function () {
    return view('admin.product');
});

Route::get('/report', function () {
    return view('admin.report');
});

Route::get('/authentication', function () {
    return view('admin.authentication');
});
