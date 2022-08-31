<?php

use App\Http\Controllers\Admin\DashboardCotroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserCotroller;
use App\Http\Controllers\Controller;
use \Admin\CategoryController;
use \Admin\TagController;
use \Admin\PostController;

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

/**
 * CATEGORY CRUD
 */
route::resource('categories', CategoryController::class)->names('admin.categories');

/**
 * TAG CRUD
 */
route::resource('tags', TagController::class)->names('admin.tags');

/**
 * POST CRUD
 */
route::resource('posts', PostController::class)->names('admin.posts');
