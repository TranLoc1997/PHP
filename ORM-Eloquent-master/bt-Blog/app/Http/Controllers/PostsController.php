<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Posts::all();
    	return view('posts.list', compact('posts'));
    }
    public function show($id)
    {
    	$post = Posts::findOrFail($id);

    	return view('posts.show', compact('post'));
    }
    public function edit($id)
    {
    	$post = Posts::findOrFail($id);
    	return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
    	$post = Posts::findOrFail($id);
    	$post->title = $request->input('title');
    	$post->content = $request->input('content');
    	//cap nhat anh
	    if ($request->hasFile('image')) {

	        //xoa anh cu neu co
	        $currentImg = $post->image;
	        if ($currentImg) {
	            Storage::delete('/public/' . $currentImg);
	        }
	          // cap nhat anh moi
            $image = $request->file('image');
	        $path = $image->store('images', 'public');
	        $post->image = $path;
	    $post->date = $request->input('date');
	    $post->save();
	      //dung session de dua ra thong bao
	    Session::flash('success', 'Cập nhật thành công');
	      //tao moi xong quay ve trang danh sach task
	    return redirect()->route('posts.index');
      }
    }
    public function destroy($id)
    {
    	$post = Posts::findOrFail($id);
    	$post->delete();
    	Session::flash('success', 'Xóa khách hàng thành công');
    	return redirect()->route('posts.index');
    }
    public function create()
    {
    	return view('posts.create');
    }
    public function store(Request $request)
    {
    	$post = new Posts();
    	$post->title = $request->input('title');
    	$post->content = $request->input('content');

    	if ($request->hasFile('image')) {
          $image = $request->file('image');
          $path = $image->store('images', 'public');
          $post->image = $path;
      	}
    	$post->date = $request->input('date');
    	$post->save();
    	Session::flash('success', 'Thêm thành công');
    	return redirect()->route('posts.index');
    }
}
