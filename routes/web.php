<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
 
// Route::get('/', function () {
//     return view('login');
// });
// Auth::routes();
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'post_login'])->name('do_login') ;
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/posts', [UserController::class, 'dashboard'])->name('dashboard');

// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// routes/web.php
// Route::get('/postlogin', 'LoginController&postlogin')->name('postlogin');
// Route::get('/login', function () {
//         return view('login');
//     });

// Route::get('/sesi/register',[SessionController::class, 'register']);
// Route::post('/sesi/create',[SessionController::class, 'create']);

