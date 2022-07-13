<?php

use App\Post;
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

 /*Route::get('/', function () {
   // $posts = Post::all();

    return view('welcome');
});*/

/* post */

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home/{id}', 'HomeController@show');

Route::resource('posts', 'PostsController');