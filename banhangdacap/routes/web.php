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

 Route::get('/login', function() {
     echo 'Hello Word';
 });

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});
Route::get('/ProductDiscountCalculator', function() {
      return view('ProductDiscountCalculator');
 });
 Route::post('/ProductDiscountCalculator', function (Illuminate\Http\Request $request) {
		$productDescription = $request->description;
		$price = $request ->price;
		$discountpercent = $request->discount_percent;
		$DiscountAmount= $price * $discountpercent * 0.1;
		$DiscountPrice=$price - $DiscountAmount;
		return view('ketquatinhlai', compact(['DiscountPrice', 'DiscountAmount', 'productDescription', 'price', 'discountpercent']));
});	

Route::get('/tudien', function() {
      return view('tudien');
 });
Route::post('/tudien', function (Illuminate\Http\Request $request) {

   $tienganh = $request->anh;
   $tiengviet ="";
   $tudien =array("hello"=>"xin chao", "hi"=>"xinchao ");
   foreach($tudien as $key => $value){
       if ($tienganh == $key) {
           $tiengviet = $value;
       }
   }
   return view('ketquatudien', compact(['tienganh','tiengviet']));
});			