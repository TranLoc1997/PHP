<?php

namespace App\Http\Controllers\admin;
use App\models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class categoryController extends Controller
{
	public function getcate(){
		$data['catelist'] = category::all();
		return view('admin.category',$data);
	}
	public function postcate(AddCateRequest $request){
		$category=new category;
		$category->case_name = $request->name;
		$category->case_slug = str_slug($request->name);
		$category->save();
		// return black();
		return redirect()->route('category');

	}

	public function geteditcate($id){
		 $data= category::findOrFail($id);
		 return view('admin.editcategory',compact('data'));
	}

	public function posteditcate(EditCateRequest $request,$id){
		$category=category::findOrFail($id);
		$category->case_name = $request->name;
		$category->case_slug = str_slug($request->name);
		$category->save();
		return redirect()->intended('admin/category'); 
	}

	public function getdeletecate($id){
  	$category = category::findOrFail($id);
  	$category->delete();
  	return redirect()->intended('admin/category');
  }
}
