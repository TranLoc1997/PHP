<?php

namespace App\Http\Controllers\admin;
use App\models\category;
use Illuminate\Http\Request;
use App\models\Product;
use http\Env\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB;

class ProductController extends Controller
{
	public function getproduct(){
		$data['productlist']=DB::table('Ql-product')->join('QL-category','Ql-product.prod_cate','=','QL-category.id')->orderBy('prod_id','desc')->get();
		
		return view('admin.product',$data);
	}

	public function addproduct(){
		$data['catelist'] = category::all();
		return view('admin.Addproduct',$data);
	}

	public function postaddproduct(Request $request){
		$product=new Product;
		$product->prod_name=$request->name;
		$product->prod_slug=str_slug($request->name);
		$product->prod_accessories=$request->accessories;
		$product->prod_price=$request->price;
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$path = $image->store('images', 'public');
			$product->image = $path;
		}
		$product->prod_warranty=$request->warranty;
		$product->prod_promotion=$request->promotion;
		$product->prod_condition=$request->condition;
		$product->prod_status=$request->status;
		$product->prod_description=$request->description;
		$product->prod_cate=$request->cate;
		$product->prod_featured=$request->featured;
		$product->save();
		
		return redirect()->route('postproduct');


	}
	public function geteditprod($prod_id)
	{
		$data1= DB::table('Ql-product')->where('prod_id', $prod_id)->first();
		$data['catelist'] = category::all();
		//$data1=Product::findOrFail($prod_id);
		//echo $data1;
		// 
		
		return view('admin.editProduct',['data1'=>$data1],$data);
	}

	public function posteditprod(Request $request,$id){
		//$product= DB::table('Ql-product')->where('prod_id', $prod_id)->first();
		$product= Product::findOrFail($id);
		$product->prod_name=$request->name;
		$product->prod_slug=str_slug($request->name);
		$product->prod_accessories=$request->accessories;
		$product->prod_price=$request->price;
		if ($request->hasFile('image')) {

          //xoa anh cu neu co
          $currentImg = $product->image;
          if ($currentImg) {
              Storage::delete('/public/' . $currentImg);
          }
          // cap nhat anh moi
          $image = $request->file('image');
          $path = $image->store('images', 'public');
          $product->image = $path;
      }
		$product->prod_warranty=$request->warranty;
		$product->prod_promotion=$request->promotion;
		$product->prod_condition=$request->condition;
		$product->prod_status=$request->status;
		$product->prod_description=$request->description;
		$product->prod_cate=$request->cate;
		$product->prod_featured=$request->featured;
		
		
		$product->save();

		
		return redirect()->intended('admin/product'); 
	}

	public function getdeleteprod($id){
  	Product::destroy($id);
  	
  	return redirect()->intended('admin/product');
  }

}
