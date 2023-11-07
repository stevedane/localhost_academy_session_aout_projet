<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;


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

    Route::get('/profile',[HomeController::class, 'profile'])
    ->name('profile');

    Route::post('/profile/{user}',[HomeController::class, 'storeProfile'])
    ->name('store-profile');
    
});
Route::resource('/users', UserController::class);

Route::resource('/roles', RoleController::class);

Route::get('/image-gallery', [ImageGalleryController::class, 'index'])->name('image-galery.index');
