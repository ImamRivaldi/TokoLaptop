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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', 'LaptopController@index')->name('index');
Route::get('create', 'LaptopController@create')->name('create');
Route::post('store', 'LaptopController@store')->name('store');
Route::get('destroy/{id}', 'LaptopController@destroy')->name('destroy');
Route::get('edit/{id}', 'LaptopController@edit')->name('edit');
Route::post('update/{id}', 'LaptopController@update')->name('update');
Route::get('search', 'LaptopController@search')->name('search');
Route::get('print', 'LaptopController@print')->name('print');
Route::get('contact', 'LaptopController@contact')->name('contact');
