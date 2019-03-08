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


Route::get('home', function () {
    return view('home');
});
//Route::group(['prefix' => 'customers'], function () {
  Route::get('list','CustomerController@index')->name('customers.index');
  Route::get('create','CustomerController@create')->name('customers.create');
  Route::post('create','CustomerController@store')->name('customers.store');
  Route::get('/{id}/edit','CustomerController@edit')->name('customers.edit');
  Route::post('/{id}/edit','CustomerController@update')->name('customers.update');
  Route::get('/{id}/destroy','CustomerController@destroy')->name('customers.destroy');

Route::group(['prefix' => 'tasks'], function () {
  Route::get('list','TaskController@index')->name('tasks.index');
  Route::get('create','TaskController@create')->name('tasks.create');
  Route::post(' create','TaskController@store')->name('tasks.store');
  Route::get('/{id}/edit','TaskController@edit')->name('tasks.edit');
  Route::post('/{id}/edit','TaskController@update')->name('tasks.update');
  Route::get('/{id}/destroy','TaskController@destroy')->name('tasks.destroy');
});