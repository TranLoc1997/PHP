<?php

namespace App\Http\Controllers;
use App\models\Product;
use Illuminate\Http\Request;

class fronendController extends Controller
{
    public function gethome(){
    	$data['featured']=Product::where('prod_featured','1')->orderBy('prod_id','desc')->get();
    	return view('PageHome.index',$data);
    	
    }
}
