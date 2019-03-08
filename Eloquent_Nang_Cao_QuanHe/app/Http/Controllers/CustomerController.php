<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\City;
use http\Env\Response;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{


  public function index(){
    $customers = Customer::paginate(5);
    $cities = City::all();
    return view('customers.list', compact('customers', 'cities'));
  }

  public function create(){
    $cities = City::all();
    return view('customers.create',compact('cities'));
  }

  public function store(Request $request){
    $customer = new Customer();
    $customer->name     = $request->input('name');
    $customer->email    = $request->input('email');
    $customer->dob      = $request->input('dob');
    $customer->city_id  = $request->input('city_id');
    $customer->save();

    //tao moi xong quay ve trang danh sach khach hang
    return redirect()->route('customers.index');
  }

  public function edit($id){
    $customer = Customer::findOrFail($id);
    $cities = City::all();

    return view('customers.edit', compact('customer', 'cities'));
  }

  public function update(Request $request, $id){
    $customer = Customer::findOrFail($id);
    $customer->name     = $request->input('name');
    $customer->email    = $request->input('email');
    $customer->dob      = $request->input('dob');
    $customer->city_id  = $request->input('city_id');
    $customer->save();

    //dung session de dua ra thong bao
    Session::flash('success', 'Cập nhật khách hàng thành công');

    //cap nhat xong quay ve trang danh sach khach hang
    return redirect()->route('customers.index');
  }
  public function destroy($id){
    $customer = Customer::findOrFail($id);
    $customer->delete();

    Session::flash("success","Cập nhật thành công");
    return redirect()->route('customers.index');
  }

  //lọc thành phố
  public function filterByCity(Request $request){
    $idCity = $request->input('city_id');

    //kiem tra city co ton tai khong
    $cityFilter = City::findOrFail($idCity);

    //lay ra tat ca customer cua cityFiler
    $customers = Customer::where('city_id', $cityFilter->id)->paginate(5);
    $totalCustomerFilter = count($customers);
    $cities = City::all();

    return view('customers.list', compact('customers', 'cities', 'totalCustomerFilter', 'cityFilter'));
  }

  public function search(Request $request)

{

    $keyword = $request->input('keyword');

    if (!$keyword) {

        return redirect()->route('customers.index');

    }

    $customers = Customer::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);


    $cities = City::all();

    return view('customers.list', compact('customers', 'cities'));


}
}
