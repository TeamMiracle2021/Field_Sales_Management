<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;


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

Route::get('/dashboard', function () {
    // dd(\Illuminate\Support\Facades\Auth::user());
    return view('dashboard');

})->middleware('auth');

//admin routes
Route::prefix('admin')->name('admin.')->group(function (){
    Route::resource('/user' ,App\Http\Controllers\Admin\UserController::class);

});

Route::resource('user' ,App\Http\Controllers\UserCreateController::class);
Route::resource('userType' ,App\Http\Controllers\UserTypeController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::resource('product',ProductController::class);
Route::resource('category',CategoryController::class);
//Route::delete('product',[ProductController::class,'destroy']);
Route::resource('shop',ShopController::class);
Route::resource('route',RouteController::class);
Route::resource('user',UserController::class);
Route::resource('usertype',UserTypeController::class);
Route::resource('attendence',AttendenceController::class);


Route::resource('report',\App\Http\Controllers\ReportController::class);


Route::get('/show2/{id}', [RouteController::class, 'show2'])->name('route.show2');

Route::get('/route/create/getlatlng', [RouteController::class, 'getlatlng'])->name('route.getlatlng');

Route::get('/rep/shops', [ShopController::class, 'shopreport'])->name('shop.shopreport');

Route::get('/rep/product', [ProductController::class, 'productreport'])->name('product.productreport');

Route::get('/rep/route', [RouteController::class, 'routereport'])->name('route.routereport');

Route::get('/rep/att', [AttendenceController::class, 'attreport'])->name('attendence.attreport');

Route::get('/rep/unproductive', [ShopController::class, 'unpreport'])->name('shop.unpreport');

Route::get('/rep/orderreport', [ShopController::class, 'orderreport'])->name('shop.orderreport');











