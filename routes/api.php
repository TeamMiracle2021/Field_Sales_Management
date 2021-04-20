<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypeController;


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


