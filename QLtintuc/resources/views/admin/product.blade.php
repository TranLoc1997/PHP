@extends('admin.master')
@section('title','Danh Mục Sản Phẩm')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách sản phẩm</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<a href="{{asset('admin/Addproduct')}}" class="btn btn-primary">Thêm sản phẩm</a>
							<table class="table table-bordered" style="margin-top:20px;">				
								<thead>
									<tr class="bg-primary">
										<th style="text-align: center;">STT</th>
										<th  style="text-align: center;"width="30%">Tên Sản phẩm</th>
										<th style="text-align: center;">Giá sản phẩm</th>
										<th  style="text-align: center;"width="20%">Ảnh sản phẩm</th>
										<th style="text-align: center;">Danh mục</th>
										<th style="text-align: center;">Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($productlist  as $key=>$product)
									<tr>
										<td style="text-align: center;">{{++$key}}</td>
										<td style="text-align: center;">{{$product->prod_name}}</td>
										<td style="text-align: center;">{{number_format($product->prod_price,0,',','.')}} VND</td>
										<td style="text-align: center;">
											@if($product->image)
											<img src="{{ asset('storage/'.$product->image) }}" alt="" style="width: 100px; height: 100px">
											@else
											{{'Chưa có ảnh'}}
											@endif
										</td>
										
										<td style="text-align: center;">{{$product->case_name}}</td>
										<td style="text-align: center;">
											<a href="{{asset('admin/editProduct/'.$product ->prod_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{route('deleteProduct',$product ->prod_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
										</td>
									</tr>
									@endforeach()

								</tbody>

							</table>	
								
						</div>
						{{-- <div style="padding-left:500px">{{ $productlist->links() }}</div> --}}
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>
@endsection