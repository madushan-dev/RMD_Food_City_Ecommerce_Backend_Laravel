<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProductsController;
use App\Http\Controllers\ApiCategoriesController;
use App\Http\Controllers\ApicartController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Products End-points
Route::controller(ApiProductsController::class)->group(function () {
    Route::get('/products', 'index');
    Route::get('/products/{product}', 'show');
    Route::get('/shop', 'shop');  
});

//Categories End-points
Route::controller(ApiCategoriesController::class)->group(function () {
    Route::get('/categories', 'index');
    Route::get('/categories/{category}', 'show');
});

//Categories End-points
Route::controller(ApicartController::class)->group(function () {
    Route::get('/cart', 'index');
    Route::delete('/cart/{id}', 'delete');
    Route::post('/cart', 'store');
});
