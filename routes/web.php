<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
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

Route::get('/test', function () {
    return view('test');
});

//Manage post
// Route::delete('/posts/destroy/{post}', [PostController::class, 'destroy'])->name('posts.delete');
// Route::put('/posts/update/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::get('/posts/show/{post}', [PostController::class, 'show'])->name('posts.show');
Route::resource('/posts', PostsController::class);
Route::get('/posts/comment/{post}', [PostsController::class, 'comment'])->name('posts.comment');