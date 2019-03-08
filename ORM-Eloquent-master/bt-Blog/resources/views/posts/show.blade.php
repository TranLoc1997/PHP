@extends('home')
@section('title', 'Xem bài viết')

@section('content')
<div class="col-12 col-md-12">
   <div class="row">
      <div class="col-12">
          <h1>Xem bài viết</h1>
      </div>
      <div class="col-12">
       	
        <h3>Tiêu đề: {{ $post->title }}</h3>
        <p>{{$post->content}}</p>
   
       </div>
     </div>
   </div>
@endsection 