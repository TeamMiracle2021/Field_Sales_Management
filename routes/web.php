<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\AttendenceController;





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

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/dashboard',[UserController::class,'count'])->name('user.count');




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

Route::get('/rep/orderdetailreport/{id}', [ShopController::class, 'orderdetailreport'])->name('shop.orderdetailreport');

Route::post('/loginweb', [UserController::class, 'loginweb'])->name('user.loginweb');

Route::get('/loginview', [UserController::class, 'loginview'])->name('user.loginview');

Route::get('/daydate', [UserController::class, 'daydate']);

Route::get('rep/salesIndex',[ShopController::class,'salesIndex'])->name('shop.salesIndex');

Route::get('rep/allSales',[ShopController::class,'allSales'])->name('shop.allSales');

Route::get('rep/allSalesByUser',[ShopController::class,'allSalesByUser'])->name('shop.allSalesByUser');

Route::get('rep/allSalesOfProducts',[ShopController::class,'allSalesOfProducts'])->name('shop.allSalesOfProducts');

Route::get('test',[RouteController::class,'test'])->name('route.test');

Route::get('routestep1',[RouteController::class,'step1'])->name('route.step1');

Route::post('step1Store',[RouteController::class,'step1Store'])->name('route.step1Store');

Route::get('step2Store',[RouteController::class,'step2Store'])->name('route.step2Store');

Route::get('step3Store',[RouteController::class,'step3Store'])->name('route.step3Store');

Route::get('step3Store',[RouteController::class,'step3Store'])->name('route.step3Store');

Route::get('deleteWhenCreate',[RouteController::class,'deleteWhenCreate'])->name('route.deleteWhenCreate');

Route::get('testmap',[RouteController::class,'testmap'])->name('route.testmap');

Route::get('getshoplocation',[ShopController::class,'getshoplocation'])->name('shop.getshoplocation');

Route::post('storeHalfShop',[ShopController::class,'storeHalfShop'])->name('shop.storeHalfShop');

Route::get('frommap',[ShopController::class,'frommap'])->name('shop.frommap');

Route::get('shopstorefinal',[ShopController::class,'shopstorefinal'])->name('shop.shopstorefinal');

Route::get('editshoplocation',[ShopController::class,'editshoplocation'])->name('shop.editshoplocation');

Route::get('imgview',[RouteController::class,'imgview'])->name('route.imgview');

Route::get('/schedule/{id}',[RouteController::class,'schedule'])->name('route.schedule');

Route::post('/saveSchedule/{id}',[RouteController::class,'saveSchedule'])->name('route.saveSchedule');

Route::post('/deleteSchedule/{id}',[RouteController::class,'deleteSchedule'])->name('route.deleteSchedule');







