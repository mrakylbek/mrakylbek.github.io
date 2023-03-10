<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', App\Http\Controllers\IndexController::class)->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::post('/posts', [App\Http\Controllers\HomeController::class, 'postStore'])->name('post.store');

Auth::routes();
