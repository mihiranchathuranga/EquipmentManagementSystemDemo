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

Route::get('RegisterEquipment/register','RegisterController@registerPageShow')->name('register'); //without the name parameter it gives route not defined error.

Route::post('store','RegisterController@store')->name('store');

Route::get('RegisterEquipment/index','RegisterController@index')->name('register.index');

Route::get('RegisterEquipment/edit/{id}','RegisterController@edit')->name('register.edit');

Route::post('RegisterEquipment/update/{id}','RegisterController@update')->name('register.update');

Route::get('RegisterEquipment/show/{id}','RegisterController@show')->name('register.show');

Route::get('RegisterEquipment/destroy/{id}','RegisterController@destroy')->name('register.destroy');

/*----------------------------------------------------------------------------*/

Route::get('repair','RepairController@repairPageShow')->name('repair');

Route::post('RepairEquipment/store','RepairController@store')->name('repair.store');

Route::get('RepairEquipment/index','RepairController@index')->name('repair.index');

Route::get('RepairEquipment/edit/{id}','RepairController@edit')->name('repair.edit');

Route::post('RepairEquipment/update/{id}','RepairController@update')->name('repair.update');

Route::get('RepairEquipment/show/{id}','RepairController@show')->name('repair.show');

Route::get('RepairEquipment/destroy/{id}','RepairController@destroy')->name('repair.destroy');



