<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexHomeController extends Controller
{
    public function getHome(){
    	return view('admin.index');
    }
    // public function getlogout(){}


}
