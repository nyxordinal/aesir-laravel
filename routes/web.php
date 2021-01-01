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

    Route::prefix('anime')->group(function () {
        Route::get('/', 'HomeController@animeIndex')->name('anime');
    });

    Route::get('/detail/{id}', 'EditController@detail');
    Route::post('/detail/{id}', 'EditController@update');

    Route::get('/create', 'AddController@display')->name('insert');
    Route::post('/create', 'AddController@insertNewAnime');

    Route::get('/profile', 'AccountController@displayProfile')->name('profile');
    Route::put('/update-profile', 'AccountController@updateProfile')->name('profile.update.submit');

    Route::prefix('account')->group(function () {
        Route::put('/email', 'AccountController@changeEmail')->name('account.email.change.submit');
        Route::put('/password', 'AccountController@changePassword')->name('account.password.change.submit');
    });

    Route::post('/export', 'AccountController@exportData')->name('export');
    // Route::get('/migrate-storage', 'AccountController@migrateConfirm')->name('migrate');
    // Route::get('/migrating', 'AccountController@migrate')->name('migrating');
});
