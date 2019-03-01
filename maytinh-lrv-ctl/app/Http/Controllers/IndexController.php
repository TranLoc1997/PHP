<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    

	public function getindex(Request $request)
	{
		$soa= $request ->soa;
		$sob= $request ->sob;
		$tinh = $request ->ketqua;
		$ketqua =0;
		if ($tinh =="cong") {
			$ketqua = $soa + $sob;
		}
		else if ($tinh=="tru") {
			$ketqua = $soa - $sob;
		}
		else if ($tinh=="nhan") {
			$ketqua = $soa* $sob;
		}
		else if ($tinh=="chia") {
			$ketqua = $soa / $sob;
		}
		return view('index', compact('ketqua'));

	}
        
}
