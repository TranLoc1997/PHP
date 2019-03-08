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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});

//tao group route customers
//Route::group(['prefix' => 'customers'], function () {
  Route::get('/','CustomerController@index')->name('customers.index');
  
  Route::get('/create','CustomerController@create')->name('customers.create');
  Route::post('/create','CustomerController@store')->name('customers.store');
  Route::get('/{id}/edit','CustomerController@edit')->name('customers.edit');
  Route::post('/{id}/edit','CustomerController@update')->name('customers.update');
  Route::get('/{id}/destroy','CustomerController@destroy')->name('customers.destroy');
//});
