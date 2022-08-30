<?php

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

/**
 * URL REYMA
 */
Route::name('reyma.')->domain('https://reyma.com.mx/')->group(function () {
    Route::get('/')
        ->name('home');

    Route::get('/contactanos')
        ->name('contactanos');
});

/**
 * URL REDES SOCIALES REYMA
 */
Route::name('red.facebook.')->domain('https://www.facebook.com/')->group(function () {
    Route::get('GrupoReymaOficial/')
        ->name('reyma');
});

Route::name('red.instagram.')->domain('https://www.instagram.com/')->group(function () {
    Route::get('reymaoficial/')
        ->name('reyma');
});

Route::name('red.twitter.')->domain('https://twitter.com/gruporeyma')->group(function () {
    Route::get('/')
        ->name('reyma');
});

Route::name('red.youtube.')->domain('https://www.youtube.com/')->group(function () {
    Route::get('channel/UC9yoe6RVAkJEBMxJ4WTglCw/')
        ->name('reyma');
});

Route::name('red.tiktok.')->domain('https://www.tiktok.com/')->group(function () {
    Route::get('@reymaoficial?lang=en/')
        ->name('reyma');
});

Route::name('red.linkedin.')->domain('https://www.linkedin.com/')->group(function () {
    Route::get('company/grupo-reyma/')
        ->name('reyma');
});

Route::name('red.spotify.')->domain('https://open.spotify.com/')->group(function () {
    Route::get('user/31n5gyqzjyqioodddcsjdzkgqkoa?si=oxIbR1xPRnWL6ikEH91ZPw&nd=1')
        ->name('reyma');
});
