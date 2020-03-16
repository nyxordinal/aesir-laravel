<?php

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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/detail/{id}', 'EditController@detail');
    Route::post('/detail/{id}', 'EditController@update');

    Route::get('/create', 'AddController@display')->name('insert');
    Route::post('/create', 'AddController@insertNewAnime');

    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/watching', 'HomeController@watching')->name('watching');
    Route::get('/watched', 'HomeController@watched')->name('watched');
    Route::get('/plan', 'HomeController@plan')->name('plan');
    Route::get('/hold', 'HomeController@hold')->name('hold');
    Route::get('/drop', 'HomeController@drop')->name('drop');
    Route::get('/no', 'HomeController@no')->name('no');
    Route::get('/complete', 'HomeController@complete')->name('complete');
    Route::get('/process', 'HomeController@process')->name('process');
});
