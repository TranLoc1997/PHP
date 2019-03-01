<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\session\Store;

class CustoperController extends Controller
{
	public function getindex(Store $session) {

		if (!$session ->has('customers')) {


			$customers = [
				[
					'STT' =>1,
					'name' => 'loc',
					'phone' =>'0123456789'
				],
				[
					'STT' =>2,
					'name' => 'nhu',
					'phone' =>'2222222'
				],
				[
					'STT' =>3,
					'name' => 'long',
					'phone' =>'01192312'
				],
				[
					'STT' =>4,
					'name' => 'khanh',
					'phone' =>'012300456789'
				],
				[
					'STT' =>5,
					'name' => 'quang',
					'phone' =>'ambinh'
				]
			];
			$session ->put('customers',$customers);

		} 
		else{ $customers =$session ->get('customers');
		
	}
	return view('modules.customer.index', ['customers' => $customers]);
}
public function them()
{
       // return view('modules.customer.them');
       // echo "show";
	return view('modules.customer.them');
}
public function crerte( Store $session ,Request $request)
{
	$customers =$session ->get('customers');
	$STT= count($customers);
	$name= $request ->name;
	$phone= $request ->phone;
	array_push($customers,['STT'=>$STT+1,'name'=>$name,'phone'=>$phone]);
	return view('modules.customer.index', ['customers' => $customers]);

}
public function getedit(Store $session ,$id )
{	
	$customers =$session ->get('customers')[$id];
	
	return view('modules.customer.edit', ['customer' => $customers]);
}
public function edit(Store $session,Request $request, $id )
{
	
	$customers =$session ->get('customers');
	$STT= $request ->STT;
	$name= $request ->name;
	$phone= $request ->phone;
	$customers[$id] = [
		'STT' =>$STT,
		'name' => $name,
		'phone' =>$phone	
	];
	
	$session->put('customers',$customers);
	return view('modules.customer.index', ['customers' => $customers]);
	

}
public function getdelete(Store $session ,$id )
{	
	$customers = $session->get('customers');

	unset($customers[$id]);
	//print_r($customers);
	$session ->put('customers',$customers);
	
	
	
	return view('modules.customer.index', ['customers' => $customers]);
}







}
?>