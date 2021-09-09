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

//Route::get('{path}', function () {
//    return file_get_contents(public_path('_nuxt/index.html'));
//})->where('path', '(.*)');

Auth::routes();

Route::get('/feed', 'HomeController@feed')->name('feed');
Route::get('/home', 'HomeController@index')->name('home');
