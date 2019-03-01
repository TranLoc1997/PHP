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

Route::get('/',[
	'uses' => 'CustoperController@getindex',
	'as' => 'customer.index'
]);

Route::get('them', [
	'uses' => 'CustoperController@them',
	'as' => 'them'
]);

Route::post('/them', [
	'uses' => 'CustoperController@crerte',
	'as' => 'customer.crerte'
]);

Route::get('edit/{id}', [
	'uses' => 'CustoperController@getedit',
	'as' => 'edit'
]);

Route::post('/edit/{id}', [
	'uses' => 'CustoperController@edit',
	'as' => 'customer.edit'
]);
Route::get('delete/{id}', [
	'uses' => 'CustoperController@getdelete',
	'as' => 'delete'
]);

















// Route::post('/them', function (Illuminate\Http\Request $request) {

// 	$customer = $request->STT;
// 	$customer = $request ->name;
// 	$customer = $request->phone;

// 	return view('modules/customer/index', compact(['STT','name','phone']));
// });	
//   Route::post('store', function () {
//       // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
//   });

//   Route::get('{id}/show', function () {
//       // Hiển thị thông tin chi tiết khách hàng có mã định danh id
//   });

//   Route::get('{id}/edit', function () {
//       // Hiển thị Form chỉnh sửa thông tin khách hàng
//   });

//   Route::patch('{id}/update', function () {
//       // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
//   });

//   Route::delete('{id}', function () {
//       // Xóa thông tin dữ liệu khách hàng
//   });
//   Route::get('index', function () {
//    // Hiển thị danh sách khách hàng
//    return view('modules.customer.index');
// });
// });
