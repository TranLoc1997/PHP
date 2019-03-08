<!DOCTYPE html>
<html>
<head>
	@include('layouts.fronend');
</head>
<body>    
	<!-- header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						{{-- <a href="#"><img src="img/home/logo.jpg"></a>						 --}}
						<nav><a id="pull" class="btn btn-danger" href="#">
							<i class="fa fa-bars"></i>
						</a></nav>			
					</h1>
				</div>
				<div id="search" class="col-md-7 col-sm-12 col-xs-12">
					<input type="text" name="text" value="Nhập từ khóa ...">
					<input type="submit" name="submit" value="Tìm Kiếm">
				</div>
				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="display" href="#">Giỏ hàng</a>
					<a href="#">6</a>				    
				</div>
			</div>			
		</div>
	</header><!-- /header -->
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
							<li class="menu-item">danh mục sản phẩm</li>
							<li class="menu-item"><a href="#" title="">iPhone</a></li>
							<li class="menu-item"><a href="#" title="">Samsung</a></li>
							<li class="menu-item"><a href="#" title="">Sony</a></li>
							<li class="menu-item"><a href="#" title="">HTC</a></li>
							<li class="menu-item"><a href="#" title="">LG</a></li>
							<li class="menu-item"><a href="#" title="">OPPO</a></li>
							<li class="menu-item"><a href="#" title="">Blackberry</a></li>						
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-5.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-6.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-7.png" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="img/home/slide-1.png" alt="Los Angeles" >
								</div>
								<div class="carousel-item">
									<img src="img/home/slide-2.png" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img src="img/home/slide-3.png" alt="New York" >
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>

					<div id="banner-t" class="text-center">
						<div class="row">
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
						</div>					
					</div>

					<div id="wrap-inner">
						<div class="products">
							<h3>sản phẩm nổi bật</h3>
							<div class="product-list row">
								@foreach($featured as $item)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#" style="width: 150px"><img style="width: 150px;height: 150px" src="{{asset('storage/'.$item->image)}}" class="img-thumbnail"></a>
									<p><a href="#">{{$item->prod_name}}</a></p>
									<p class="price">{{number_format($item->prod_price,0,',','.')}}</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                                    
								</div>
								@endforeach
							</div>                	                	
						</div>

						<div class="products">
							<h3>sản phẩm mới</h3>
							<div class="product-list row">
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                      
								</div> 
							</div>    
						</div>
					</div>

					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
	<footer id="footer">			
		<div id="footer-t">
			<div class="container">
				<div class="row">				
					<div id="about" class="col-md-4 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify">Bài Báo Cáo Modul2.</p>
					</div>
					<div id="hotline" class="col-md-4 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Name: Trần Văn Lộc</p>
						<p>Phone Sale: (+84) 0333467573</p>
						<p>Email: vanloc101997@gmail.com</p>
					</div>
					<div id="contact" class="col-md-4 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address 1: Phong Mỹ-Phong Điền-Thừa Thiên Huế</p>
					</div>
				</div>				
			</div>
			<div id="footer-b">				
				<div class="container">
					<div class="row">
						<div id="footer-b-r" class="col-md-12 col-sm-12 col-xs-12 text-center">
							<p>© 2019 Đại Học Phú Xuân Huế</p>
						</div>
					</div>
				</div>
				<div id="scroll">
					<a href="#"><img src="img/home/scroll.png"></a>
				</div>	
			</div>
		</div>
	</footer>
	<!-- endfooter -->
</body>
</html>
