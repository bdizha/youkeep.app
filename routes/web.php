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

Route::get('{path}', function () {
    return file_get_contents(public_path('_nuxt/index.html'));
})->where('path', '(.*)');

Auth::routes();

Route::get('email/verify', 'Auth\VerificationController@show')->name('confirmation.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('confirmation.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('confirmation.resend');

Route::group([ 'prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], function() {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/home', 'HomeController@index')->name('home');
