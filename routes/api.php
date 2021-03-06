<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\VehicleController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/shopadd',[ShopController::class,'saveShop']);

Route::get('/show3/{id}', [RouteController::class, 'show3'])->name('route.show3');

Route::get('/shop1/{id}', [ShopController::class, 'shop1'])->name('shop.shop1');

Route::get('/fut/{id}', [UserTypeController::class, 'fut'])->name('usertype.fut');

Route::post('/route/cre',[RouteController::class, 'storemobile'])->name('route.storemobile');

Route::get('/routeview/{id}',[RouteController::class,'viewroutes']);
Route::get('/todayrouteview/{id}',[RouteController::class,'viewTodayroutes']);

Route::get('/routewaypoints/{id}',[RouteController::class,'viewroute']);

Route::get('/viewshops/{id}',[ShopController::class,'viewshops']);
Route::get('/viewShopsForRoute/{id}/route/{id2}',[ShopController::class,'viewShopsForRoute']);

Route::get('/viewshopdetails/{id}',[ShopController::class,'viewshopdetails']);

Route::get('/viewcategories',[ProductController::class,'viewcategories']);

Route::get('/viewcategoryproducts/{id}/user/{id2}',[ProductController::class,'viewcategoryproducts']);

Route::post('/attendancecheckin/{id}',[\App\Http\Controllers\AttendenceController::class,'store']);

Route::put('/attendancecheckout/{id}',[\App\Http\Controllers\AttendenceController::class,'update']);

Route::get('/orderlist/{id}',[ShopController::class,'orderlist']);

Route::get('/orderdetails/{id}',[ShopController::class,'orderdetails']);

Route::post('/mobileshopadd',[ShopController::class,'mobileshopadd']);

Route::post('/mobileshopaddwi',[ShopController::class,'mobileshopaddwi']);

Route::post('/shopclosereason/{id}',[ShopController::class,'shopclosereason']);

Route::post('/order',[ShopController::class,'order']);

Route::post('/orderWithReturns/{id}',[ShopController::class,'orderWithReturns']);

Route::post('/mobilelogin',[UserController::class,'mobilelogin']);

Route::get('/getallorders/{id}',[ShopController::class,'getallorders']);
Route::post('/getallorders2/{id}',[ShopController::class,'getallorders2']);

Route::get('/totalitems/{id}',[ShopController::class,'totalitems']);

Route::get('/billsfromshops/{id}',[ShopController::class,'billsfromshops']);

Route::post('/onlyimage',[ShopController::class,'onlyimage']);

Route::post('/imgtest',[RouteController::class,'imgtest']);

Route::get('/viewQty/{id}',[VehicleController::class,'viewQty']);

