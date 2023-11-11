<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::resource('/users', UserController::class);
    Route::resource('/payments', PaymentController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/customers', CustomerController::class);
    Route::resource('/locations', LocationController::class);
    Route::resource('/cars', CarController::class);
    Route::resource('/brands', BrandController::class);

    Route::get('/profile',[HomeController::class, 'profile'])
    ->name('profile');

    Route::post('/profile/{user}',[HomeController::class, 'storeProfile'])
    ->name('store-profile');


    Route::get('/mail',[HomeController::class, 'mail'])
    ->name('send-mail');
});
