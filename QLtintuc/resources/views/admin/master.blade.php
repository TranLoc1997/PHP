<!DOCTYPE html>
<html>
<head>
  @include('layouts.backend')
</head>
<body>
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
      <li class="active"><a href="{{route('index')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
      <li><a href="{{asset('admin/product')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
      <li><a href="{{asset('admin/category')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
      <li role="presentation" class="divider"></li>
    </ul>

  </div><!--/.sidebar-->
  @yield('main')


  
  </body>

  </html>