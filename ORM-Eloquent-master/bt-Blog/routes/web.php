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
Route::group(['prefix' => 'posts'], function(){
	Route::get('list', 'PostsController@index')->name('posts.index');
	Route::get('show/{id}', 'PostsController@show')->name('posts.show');
	Route::get('edit/{id}', 'PostsController@edit')->name('posts.edit');
	Route::post('edit/{id}', 'PostsController@update')->name('posts.update');
	Route::get('destroy/{id}', 'PostsController@destroy')->name('posts.destroy');
	Route::get('create', 'PostsController@create')->name('posts.create');
	Route::post('create', 'PostsController@store')->name('posts.store');
});