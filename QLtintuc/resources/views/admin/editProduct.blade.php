@extends('admin.master')
@section('title','Trang Chủ Quan Trị')
@section('main')
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Trần Văn Lộc</a>
			<ul class="user-menu">
				<li class="dropdown pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->email}} <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ route('outLogin') }}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel" ></use></svg> Loguot</a></li>
					</ul>
				</li>
			</ul>
		</div>

	</div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<ul class="nav menu">
		<li role="presentation" class="divider"></li>
		<li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
		<li><a href="{{asset('product')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
		<li><a href="{{asset('category')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
		<li role="presentation" class="divider"></li>
	</ul>

</div><!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Sữa sản phẩm</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Tên sản phẩm</label>
									<input required="" type="text" name="name" class="form-control" value="{{ $data1->prod_name }}">
								</div>
								<div class="form-group">
									<label>Giá sản phẩm</label>
									<input required="" type="number" name="price" class="form-control"value="{{ $data1->prod_price }}">
								</div>
								<div class="form-group">
									<label>Ảnh sản phẩm</label>
									<input type="file" class="form-control-file" name="image" accept="image/x-png,image/gif,image/jpeg" {{-- value="{{ $data1->prod_image }}" --}} />
								</div>
								<div class="form-group">
									<label>Phụ kiện</label>
									<input required="" type="text" name="accessories" class="form-control"value="{{ $data1->prod_accessories }}">
								</div>
								<div class="form-group">
									<label>Bảo hành</label>
									<input required="" type="text" name="warranty" class="form-control"value="{{ $data1->prod_warranty }}">
								</div>
								<div class="form-group">
									<label>Khuyến mãi</label>
									<input required="" type="text" name="promotion" class="form-control"value="{{ $data1->prod_promotion }}">
								</div>
								<div class="form-group">
									<label>Tình trạng</label>
									<input required="" type="text" name="condition" class="form-control"value="{{ $data1->prod_condition }}">
								</div>
								<div class="form-group">
									<label>Trạng thái</label>
									<select required="" name="status" class="form-control">
										<option value="1" @if($data1->prod_status ==1) checked @endif>Còn hàng</option>
										<option value="0"@if($data1->prod_status ==0) checked @endif>Hết hàng</option>
									</select>
								</div>
								<div class="form-group">
									<label>Miêu tả</label>
									<textarea required="" name="description">{{ $data1->prod_description }}</textarea>
								</div>
								<div class="form-group">
									<label>Danh mục</label>
									<select required="" name="cate" class="form-control">
										@foreach( $catelist as $case)
										<option value="{{$case->id}}"@if($data1->prod_cate==$case->id) selected @endif>{{$case->case_name}}</option>
										@endforeach

									</select>
								</div>
								<div class="form-group">
									<label>Sản phẩm nổi bật</label><br>
									Có: <input type="radio" checked="" name="featured" value="1"@if($data1->prod_featured==1) selected @endif>
									Không: <input type="radio" checked="" name="featured" value="0"value="1"@if($data1->prod_featured==1) selected @endif>
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="#" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
						{{csrf_field()}}
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>
</div>

@endsection