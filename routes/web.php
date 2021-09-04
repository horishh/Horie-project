<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/register', [RegisterController::class, 'view'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'view'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard');

//Posts
Route::get('/post', [PostController::class, 'view'])->name('post.form');
Route::post('/post/create', [PostController::class, 'create'])->name('post');

Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit.form');
Route::put('/post/update', [PostController::class, 'update'])->name('post.update.form');
Route::delete('/post', [PostController::class, 'delete'])->name('post.delete.form');
