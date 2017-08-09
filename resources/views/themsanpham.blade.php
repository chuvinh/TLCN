@extends('quanly')
@section('noidung')
	<div class=""><h2>Thêm sản phẩm</h2><hr></div>
	<div class="col-md-6">
		<form>
			<div class="form-group">
		    	<label>Mã sản phẩm</label>
		    	<input type="text" class="form-control" id="masp" name="masp" placeholder="Nhập vào mã sản phẩm">
			</div>
		  	<div class="form-group">
		    	<label>Tên sản phẩm</label>
		    	<input type="text" class="form-control" id="tensp" name="tensp" placeholder="Nhập vào tên sản phẩm">
		  	</div>
		  	<div class="form-group">
			    <label for="loaisp">Loại sản phẩm</label>
			    <select class="form-control" id="loaisp">
					<option>Áo</option>
					<option>Quần</option>
					<option>Giày</option>
				</select>
			</div>
			<div class="form-group">
			    <label for="loaikh">Loại khách hàng</label>
			    <select class="form-control" id="loaikh">
					<option>Nam</option>
					<option>Nữ</option>
				</select>
			</div>
			<div class="form-group">
			    <label>Kích cỡ</label>
			    <input type="text" class="form-control" id="kichco" name="kichco" placeholder="Nhập vào kích cỡ sản phẩm">
			</div>
			<div class="form-group">
			    <label>Đơn giá</label>
			    <input type="text" class="form-control" id="dongia" name="dongia" placeholder="Nhập vào đơn giá sản phẩm">
			</div>
			<div class="form-group">
			    <label>Số lượng</label>
			    <input type="text" class="form-control" id="soluong" name="soluong" placeholder="Nhập vào số lượng sản phẩm">
			</div>
			<div class="form-group">
			    <label>Ngày nhập</label>
			    <input type="date" class="form-control" id="ngaynhap" name="ngaynhap">
			</div>
			<div class="form-group">
			    <label>Hình ảnh</label>
				<input type="file" class="form-control" name="hinhanh">
			</div>
			<div class="form-group">
			    <button class="btn btn-primary">Thêm sản phẩm</button>
			</div>
		</form>
	</div>
	<div class="col-md-6">
		<div class="box_hinh">
			<img src="{{ asset('image/baynhe.png') }}" width="100%">
		</div>
	</div>
@stop