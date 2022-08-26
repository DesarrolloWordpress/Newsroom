<?php

use App\Http\Controllers\Admin\DashboardCotroller;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

/**
 * AUTH
 */
Auth::routes();

/**
 * USER
 */
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', 'HomeController@index')->name('home');

/**
 * POST CRUD
 */
Route::get('/post/{post}', 'PostController@show')->name('post.show');
