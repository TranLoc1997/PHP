@extends('home')
@section('title', 'Blog cá nhân')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Blog cá nhân</h2>
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Bài viết</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Ngày</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        @if($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" alt="" style="width: 200px; height: 200px">
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
                    </td>
                    <td>{{ $post->date}}</td>
                    <td><a href="{{ route('posts.show', $post->id) }}">xem</a></td>
                    <td><a href="{{ route('posts.edit', $post->id) }}">sửa</a></td>
                    <td><a href="{{ route('posts.destroy',$post->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Thêm bài viết</a>
        </div>
    </div>
@endsection