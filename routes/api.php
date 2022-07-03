<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApicartController;
use App\Http\Controllers\ApiOrdersController;
use App\Http\Controllers\ApiMessageController;
use App\Http\Controllers\ApiReviewsController;
use App\Http\Controllers\ApiProductsController;
use App\Http\Controllers\ApiCategoriesController;


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
    Route::get('/search', 'search');  
});

//Categories End-points
Route::controller(ApiCategoriesController::class)->group(function () {
    Route::get('/categories', 'index');
    Route::get('/categories/{category}', 'show');
});

//Categories End-points
Route::controller(ApicartController::class)->group(function () {
    Route::get('/cart', 'index');
    Route::post('/allcart', 'allcart');
    Route::post('/cart/{id}', 'delete');
    Route::post('/cart', 'store');
    Route::post('/checkout', 'makeorder');

});

//Rviews End-points
Route::controller(ApiReviewsController::class)->group(function () {
    Route::post('/reviews', 'store');
});


//Message End-points
Route::controller(ApiMessageController::class)->group(function () {
    Route::post('/message', 'store');
});

// Auth End-points

Route::controller(ApiAuthController::class)->group(function () {
    Route::post('/auth/login', 'login');
    Route::post('/auth/register', 'register');
    Route::post('/auth/customeredit', 'editcustomer');
    Route::get('/auth/customerdata/{id}', 'loadcustomer');
});


// Orders End-points
Route::controller(ApiOrdersController::class)->group(function () {
    Route::get('/customerorders/{id}', 'index');
    Route::get('/customerorders/order/{id}', 'order');
});

