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

    Route::get('/profile', 'AccountController@displayProfile')->name('profile');
    Route::put('/update-profile', 'AccountController@updateProfile')->name('profile.update.submit');

    Route::prefix('account')->group(function () {
        Route::put('/email', 'AccountController@changeEmail')->name('account.email.change.submit');
        Route::put('/password', 'AccountController@changePassword')->name('account.password.change.submit');
    });

    Route::prefix('watch-status')->group(function () {
        Route::get('/watching', 'HomeController@watchWatching')->name('watch.watching');
        Route::get('/watched', 'HomeController@watchWatched')->name('watch.watched');
        Route::get('/plan', 'HomeController@watchPlan')->name('watch.plan');
        Route::get('/hold', 'HomeController@watchHold')->name('watch.hold');
        Route::get('/drop', 'HomeController@watchDrop')->name('watch.drop');
        Route::get('/no', 'HomeController@watchNo')->name('watch.no');
    });

    Route::prefix('download-status')->group(function () {
        Route::get('/process', 'HomeController@downloadProcess')->name('download.process');
        Route::get('/complete', 'HomeController@downloadComplete')->name('download.complete');
        Route::get('/plan', 'HomeController@downloadPlan')->name('download.plan');
        Route::get('/no', 'HomeController@downloadNo')->name('download.no');
    });

    Route::prefix('storage')->group(function () {
        Route::get('/ms1', 'HomeController@storageMS1')->name('download.ms1');
        Route::get('/ext1', 'HomeController@storageExternal1')->name('download.external1');
        Route::get('/ext2', 'HomeController@storageExternal2')->name('download.external2');
        Route::get('/laptop', 'HomeController@storageLaptop')->name('download.laptop');
    });

    Route::post('/export', 'AccountController@exportData')->name('export');
    // Route::get('/migrate-storage', 'AccountController@migrateConfirm')->name('migrate');
    // Route::get('/migrating', 'AccountController@migrate')->name('migrating');
});
