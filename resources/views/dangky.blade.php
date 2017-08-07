@extends('welcome')
@section('title','| Đăng ký')
@section('content')
<section class="content_dangnhap">
	<div class="container-fluid">
		<div class="col-md-6 col-md-offset-3">
			<h2><a href="/dang-nhap">Đăng nhập</a> | <a href="/dang-ky">Đăng ký</a></h2>
		</div>
		<div class="col-md-6 col-md-offset-3 box_dangnhap">
			<div class="col-md-6">
				<div><h2>Đăng ký</h2><hr></div>
				<div class="form_dangnhap">
					<form>
						<div class="form-group">
	    					<label>Tên đăng nhập</label>
	    					<input type="text" class="form-control" id="name" placeholder="Nhập vào tên đăng nhập của bạn">
	  					</div>
	  					<div class="form-group">
	    					<label>Mật khẩu</label>
	    					<input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu của bạn">
	  					</div>
	  					<div class="form-group">
	    					<label>Họ và tên</label>
	    					<input type="text" class="form-control" id="hovaten" placeholder="Nhập họ và tên của bạn">
	  					</div>
	  					<div class="form-group">
	    					<label>Địa chỉ</label>
	    					<input type="text" class="form-control" id="diachi" placeholder="Nhập địa chi của bạn">
	  					</div>
	  					<div class="form-group">
	    					<label>Số điện thoại</label>
	    					<input type="text" class="form-control" id="sodienthoai" placeholder="Nhập số điện thoại của bạn">
	  					</div>
	  					<div class="form-group">
	    					<label>Email</label>
	    					<input type="email" class="form-control" id="email" placeholder="Nhập email của bạn">
	  					</div>
	  					<div class="form-group">
	  						<div class="g-recaptcha" data-sitekey="6LeyvisUAAAAADtSIaq5jPzz4nHzVhjo2wxkXmkc"></div>
	  					</div>
	  					<div class="form-group">
	  						<p><input type="checkbox" name="chapnhandieukhoan"> Tôi chấp nhận những điều khoản của shop.</p>
	  					</div>
	  					<div class="form-group">
	  						<button type="submit" class="btn btn-default">Đăng ký</button>
	  					</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 box_dangnhapkhac">
				<div><h3>Hoặc đăng nhập bằng</h3></div>
				<div class="facebook">
					<button class="btn btn-primary">FaceBook</button>
				</div>
				<div class="gmail">
					<button class="btn btn-danger">Gmail</button>
				</div>
			</div>
		</div>
	</div>
</section>
@stop