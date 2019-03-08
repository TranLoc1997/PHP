<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use http\Env\Response;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    public function index(){
	  	$cities = City::all();
	  	return view('cities.list', compact('cities'));
	}

	public function create(){
	  	return view('cities.create');
	}

	public function store(Request $request){
	  	$city = new City();
	  	$city->name  = $request->input('name');
	  	$city->save();
	 
	  	//tao moi xong quay ve trang danh sach khach hang
	  	return redirect()->route('customers.index');
	}

	public function edit($id){
	  	$city = City::findOrFail($id);
	  	return view('cities.edit', compact('city'));
	}
	
	public function destroy($id){
  		$city = City::findOrFail($id);

 		//xoa khach hang thuoc tinh thanh nay
  		$city->customers()->delete();
  		$city->delete();

 		 //cap nhat xong quay ve trang danh sach tinh thanh
  		return redirect()->route('cities.index');
		}

}
