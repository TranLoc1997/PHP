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

Route::get('/','fronendController@gethome');  
// Route::group(['namespake'=>'admin'], function () {
Route::group(['prefix'=>'login'], function (){
Route::get('/','admin\LoginController@getlogin'); 
Route::post('/','admin\LoginController@poshlogin');
Route::get('/','admin\LoginController@getoutlogin')->name('outLogin'); 
});
Route::group(['prefix'=>'admin'], function (){		
	Route::get('/index','admin\IndexHomeController@gethome')->name('index'); 
	Route::get('/category','admin\categoryController@getcate'); 
	Route::post('/category','admin\categoryController@postcate')->name('category'); 
	Route::get('/editcategory/{id}','admin\categoryController@geteditcate')->name('editcategory');
	Route::post('/editcategory/{id}','admin\categoryController@posteditcate')->name('updatecategory');
	Route::get('/deletecategory/{id}','admin\categoryController@getdeletecate')->name('deletecate');
	Route::get('/product','admin\ProductController@getproduct')->name('postproduct'); 
	Route::get('/Addproduct','admin\ProductController@addproduct')->name('getadd.product'); 
	Route::post('/Addproduct','admin\ProductController@postaddproduct'); 
	Route::get('/editProduct/{id}','admin\ProductController@geteditprod');
	Route::post('/editProduct/{id}','admin\ProductController@posteditprod')->name('editpostproduct');
	Route::get('/deleteProduct/{id}','admin\ProductController@getdeleteprod')->name('deleteProduct');
});



