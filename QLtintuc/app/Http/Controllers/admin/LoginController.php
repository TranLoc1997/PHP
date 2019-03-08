<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;

use Auth;
class LoginController extends Controller
{
	public function getlogin(){
		return view('admin.Login');
	}

	public function poshlogin(Request $request){
		$Arruser = [
			'email'=>$request->email,
			'password'=>$request->password
		];
		if ($request->remember ='Remember Me') {
			$request=true;
		}
		else{
			$request=false;
		}
		if(Auth::attempt($Arruser,$request)){
			return view('admin/index');
		}	
		else{
			return redirect()->back()->with('error','Tài Khoản Hoặc Mật Khẩu Chưa Đúng');
		}

	}
	public function getoutlogin(){
		return view('admin.Login');
	}
}
