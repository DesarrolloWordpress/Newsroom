<?php

use App\Http\Controllers\Admin\DashboardCotroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserCotroller;

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

/**
 * CRUD RUTAS DE USUARIOS
 */

// Route::resource('users', UserCotroller::class)->name('users');

/**
 * DASHBOARD
 */
Route::get('', [DashboardCotroller::class, 'index'])->name('dashboard.index');
