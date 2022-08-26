<?php

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
 * AUTH CRUD
 */
/*Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', function () {
    $credentials = request()->only('email', 'password');

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();

        return redirect('home');
    }

    return redirect('login');
});*/

/**
 * USER
 */
Auth::routes();
Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');

/**
 * POST CRUD
 */
Route::get('/post/{post}', 'PostController@show')->name('post.show');

/* Route::resource('posts', 'PostsController'); */

/*Route::get('/home', 'HomeController@index')->name('home');*/