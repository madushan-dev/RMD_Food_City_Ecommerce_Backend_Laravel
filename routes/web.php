<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomersController;
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


// Login Page Routes
Route::get('/',function(){
    return view('dashboard');
})->middleware(['auth']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// Orders Routes
Route::controller(OrdersController::class)->group(function () {
    Route::get('/orders', 'index')->name('orders');
    Route::get('/orders/{order}', 'show');
    Route::post('/orders/{order}', 'update');
    Route::delete('/orders/{order}', 'destroy');
   
});


Route::controller(CustomersController::class)->group(function () {
    Route::get('/customers', 'index')->name('customers');
    Route::get('/customers/{customer}', 'show');
    Route::post('/customers/{customer}', 'update');
    Route::delete('/customers/{customer}', 'destroy');
   
});
