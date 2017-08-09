@extends('menu')
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
					<form method="POST" role="form" action="{{url('dang-ky')}}">
						@if($errors->has('errorsRegister'))
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								{{$errors->first('errorsRegister')}}
							</div>
						@endif
						@if($errors->has('errorsSuccse'))
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								{{$errors->first('errorsSuccse')}}
							</div>
						@endif
						<div class="form-group">
	    					<label>Tên đăng nhập</label>
	    					<input type="text" class="form-control" id="name" name="tendangnhap" placeholder="Nhập vào tên đăng nhập của bạn">
	    					@if($errors->has('tendangnhap'))
	    						<p style="color: red">{{ $errors->first('tendangnhap') }}</p>
	    					@endif
	  					</div>
	  					<div class="form-group">
	    					<label>Mật khẩu</label>
	    					<input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu của bạn">
	    					@if($errors->has('matkhau'))
	    						<p style="color: red">{{ $errors->first('matkhau') }}</p>
	    					@endif
	  					</div>
	  					<div class="form-group">
	    					<label>Nhập lại mật khẩu</label>
	    					<input type="password" class="form-control" id="vermatkhau" name="vermatkhau" placeholder="Nhập mật khẩu của bạn">
	    					@if($errors->has('vermatkhau'))
	    						<p style="color: red">{{ $errors->first('vermatkhau') }}</p>
	    					@endif
	  					</div>
	  					<div class="form-group">
	    					<label>Họ và tên</label>
	    					<input type="text" class="form-control" id="hovaten" name="hovaten" placeholder="Nhập họ và tên của bạn">
	    					@if($errors->has('hovaten'))
	    						<p style="color: red">{{ $errors->first('hovaten') }}</p>
	    					@endif
	  					</div>
	  					<div class="form-group">
	    					<label>Địa chỉ</label>
	    					<input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập địa chi của bạn">
	    					@if($errors->has('diachi'))
	    						<p style="color: red">{{ $errors->first('diachi') }}</p>
	    					@endif
	  					</div>
	  					<div class="form-group">
	    					<label>Số điện thoại</label>
	    					<input type="text" class="form-control" id="sodienthoai" name="sodienthoai" placeholder="Nhập số điện thoại của bạn">
	    					@if($errors->has('sodienthoai'))
	    						<p style="color: red">{{ $errors->first('sodienthoai') }}</p>
	    					@endif
	  					</div>
	  					<div class="form-group">
	    					<label>Email</label>
	    					<input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn">
	    					@if($errors->has('email'))
	    						<p style="color: red">{{ $errors->first('email') }}</p>
	    					@endif
	  					</div>
	  					<div class="form-group">
	  						<div class="g-recaptcha" data-sitekey="6LeyvisUAAAAADtSIaq5jPzz4nHzVhjo2wxkXmkc"></div>
	  					</div>
	  					{!! csrf_field() !!}
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