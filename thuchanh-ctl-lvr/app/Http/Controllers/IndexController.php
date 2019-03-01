<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	function index(Request $request)
	{
  // Lấy dữ liệu Email từ URL
		$email = $request->email;

		$check = true;

  // Kiểm tra validate email theo hàm mặc định thư viện PHP
		if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$check = false;
		}

		return view('index', compact('check'));
	}

}
