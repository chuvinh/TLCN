@extends('welcome')
@section('title',' | Quản lý')
@section('content')
<section class="content_quanly">
	<div class="container-fluid">
		<div class="col-md-3 box_menu_quanly">
			<ul class="nav nav-pills nav-stacked menu_quanly">
				<li class="tree-toggle"><a>Quản lý sản phẩm<span class="menu-collapsible-icon glyphicon glyphicon-chevron-down"></span></a></li>
					<ul class="nav nav-list tree">
						<li class="ql_sanpham"><a href="/quan-ly/danh-sach-san-pham">Danh sách sản phẩm</a></li>
						<li class="ql_sanpham"><a href="/quan-ly/sua-thong-tin-san-pham">Sửa thông tin sản phẩm</a></li>
						<li class="ql_sanpham"><a href="/quan-ly/sua-gia-san-pham">Sửa giá sản phẩm</a></li>
						<li class="ql_sanpham"><a href="/quan-ly/them-san-pham">Thêm sản phẩm</a></li>
					</ul>
				<li class="tree-toggle"><a>Quản lý đơn hàng<span class="menu-collapsible-icon glyphicon glyphicon-chevron-down"></span></a></li>
					<ul class="nav nav-list tree">
						<li class="ql_donhang"><a href="/quan-ly/danh-sach-don-hang">Danh sách các đơn hàng</a></li>
					</ul>
				<li class="tree-toggle"><a>Quản lý khuyến mãi<span class="menu-collapsible-icon glyphicon glyphicon-chevron-down"></span></a></li>
					<ul class="nav nav-list tree">
						<li class="ql_khuyenmai"><a href="/quan-ly/danh-sach-khuyen-mai">Danh sách chương trình khuyến mãi</a></li>
						<li class="ql_khuyenmai"><a href="/quan-ly/them-khuyen-mai">Thêm chương trình khuyến mãi</a></li>
					</ul>
				<li class="tree-toggle"><a>Quản lý doanh thu<span class="menu-collapsible-icon glyphicon glyphicon-chevron-down"></span></a></li>
					<ul class="nav nav-list tree">
						<li class="ql_doanhthu"><a href="/quan-ly/xem-doanh-thu">Xem doanh thu</a></li>
					</ul>
				<li class="tree-toggle"><a href="">Đăng xuất<span class="glyphicon glyphicon-log-out"></span></a></li>
			</ul>
		</div>
		<div class="col-md-9">
			<div class="col-md-12 box_noidung">
				@yield('noidung')
			</div>
		</div>
	</div>
</section>
@stop