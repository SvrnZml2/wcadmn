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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('actualites', 'ActuController');
Route::resource('products', 'ProductController');



Auth::routes();

Route::get('compte', 'HomeController@index')->name('compte.home');
Route::get('settings', 'HomeController@settings')->name('compte.settings');

Route::put('compte', 'HomeController@update')->name('compte.update');
