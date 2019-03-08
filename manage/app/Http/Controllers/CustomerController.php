<?php

namespace App\Http\Controllers;
use App\Customer;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

  public function index(){
  	$customers = Customer::all();
  	return view('list', compact('customers'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */

  public function create(){
  	return view('create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request){
  	$customer = new Customer();
  	$customer->name     = $request->input('name');
  	$customer->email    = $request->input('email');
  	$customer->dob      = $request->input('dob');
  	$customer->save();

      //dung session de dua ra thong bao
  	Session::flash('success', 'Tạo mới khách hàng thành công');
      //tao moi xong quay ve trang danh sach khach hang
  	return redirect()->route('customers.index');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id){
  	$customer = Customer::findOrFail($id);
  	return view('edit', compact('customer'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id){
  	$customer = Customer::findOrFail($id);
  	$customer->name     = $request->input('name');
  	$customer->email    = $request->input('email');
  	$customer->dob      = $request->input('dob');
  	$customer->save();

      //dung session de dua ra thong bao
  	Session::flash('success', 'Cập nhật khách hàng thành công');
      //cap nhat xong quay ve trang danh sach khach hang
  	return redirect()->route('customers.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id){
  	$customer = Customer::findOrFail($id);
  	$customer->delete();

      //dung session de dua ra thong bao
  	Session::flash('success', 'Xóa khách hàng thành công');

      //xoa xong quay ve trang danh sach khach hang
  	return redirect()->route('customers.index');
  }
}
