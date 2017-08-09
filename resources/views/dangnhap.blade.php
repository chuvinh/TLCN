@extends('menu')
@section('title','| Đăng nhập')
@section('content')
<section class="content_dangnhap">
	<div class="container-fluid">
		<div class="col-md-6 col-md-offset-3">
			<h2><a href="/dang-nhap">Đăng nhập</a> | <a href="/dang-ky">Đăng ký</a></h2>
		</div>
		<div class="col-md-6 col-md-offset-3 box_dangnhap">
			<div class="col-md-6">
				<div><h2>Đăng nhập</h2><hr></div>
				<div class="form_dangnhap">
					<form method="POST" role="form" action="{{url('dang-nhap')}}">
						@if($errors->has('errorsLogin'))
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								{{$errors->first('errorsLogin')}}
							</div>
						@endif
						<div class="form-group">
	    					<label>Tên đăng nhập</label>
	    					<input type="text" class="form-control" id="name" name="name" placeholder="Nhập vào tên đăng nhập của bạn">
	    					@if($errors->has('name'))
	    						<p style="color: red">{{ $errors->first('name') }}</p>
	    					@endif
	  					</div>
	  					<div class="form-group">
	    					<label>Mật khẩu</label>
	    					<input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu của bạn">
	    					@if($errors->has('password'))
	    						<p style="color: red">{{ $errors->first('password') }}</p>
	    					@endif
	  					</div>
	  					<div class="form-group">
	  						<p><input type="checkbox" name="nhomatkhau"> Ghi nhớ mật khẩu | <a href="">Quên mật khẩu? </a></p>
	  					</div>
	  					{!! csrf_field() !!}
	  					<div class="form-group">
	  						<button type="submit" class="btn btn-default">Đăng nhập</button>
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