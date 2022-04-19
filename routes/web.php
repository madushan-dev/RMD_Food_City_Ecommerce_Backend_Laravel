<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ProfileController;

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

// Products Routes
Route::controller(ProductsController::class)->group(function () {
    Route::get('/products', 'index')->name('products');
    Route::get('/products/new', 'new');
    Route::post('/products/new','store');
    Route::delete('/products/{product}', 'destroy');
    Route::get('/products/{product}', 'show');
    Route::post('/products/{product}', 'update'); 
    
});

// Customers routes
Route::controller(CustomersController::class)->group(function () {
    Route::get('/customers', 'index')->name('customers');
    Route::get('/customers/new', 'new');
    Route::post('/customers/new', 'store');
    Route::get('/customers/{customer}', 'show');
    Route::post('/customers/{customer}', 'update');
    Route::delete('/customers/{customer}', 'destroy');
});

// employees routes
Route::controller(EmployeesController::class)->group(function () {
    Route::get('/employees', 'index')->name('employees');
    Route::get('/employees/new', 'new');
    Route::post('/employees/new', 'store');
    Route::get('/employees/{employee}', 'show');
    Route::post('/employees/{employee}', 'update');
    Route::delete('/employees/{employee}', 'destroy');
});


// Messages routes
Route::controller(MessagesController::class)->group(function () {
    Route::get('/messages', 'index')->name('messages');
    Route::get('/messages/{message}', 'show');
    Route::delete('/messages/{message}', 'destroy');
});
// Reviews routes
Route::controller(SettingsController::class)->group(function () {
    Route::get('/settings', 'index')->name('reviews');
});


// Settings routes
Route::controller(ReviewsController::class)->group(function () {
    Route::get('/reviews', 'index')->name('reviews');
    Route::get('/reviews/{review}', 'show');
    Route::post('/reviews/{review}', 'update');
    Route::delete('/reviews/{review}', 'destroy');
});

// profile routes
Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'show')->name('profile');
    Route::post('/profile/{employee}', 'update');
});

