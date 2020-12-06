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

Route::get('register','RegisterController@registerPageShow')->name('register'); //without the name parameter it gives route not defined error.

Route::get('repair','RepairController@repairPageShow')->name('repair');

Route::post('store','RegisterController@store')->name('store');
