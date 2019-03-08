@extends('admin.master')
@section('title','Danh Mục Sản Phẩm')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục sản phẩm</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Thêm danh mục
                </div>
                <div class="panel-body">

                    <form method="post">
                        <div class="form-group">
                            <label>Tên danh mục:</label>
                            <input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên danh mục..." value="Thêm Mới">
                        </div>
                        {{csrf_field()}}
                    </form>


                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-7 col-lg-7">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách danh mục</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-primary">
                                    <th>STT</th>
                                  <th>Tên danh mục</th>
                                  <th style="width:30%">Tùy chọn</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($catelist as $key =>$case)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$case->case_name}}</td>
                                <td>
                                    <a href="{{route('editcategory',$case->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                    <a href="{{ route('deletecate', $case->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                </td>
                            </tr>
                            @endforeach()

                        </tbody>
                    </table>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div><!--/.row-->
</div>
@stop



