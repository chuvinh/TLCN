@extends('menu')
@section('slider')
<section class="slider">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 slider_left">
				    <div class="item active">
				    	<img src="{{ asset('image/slider-01.jpg')}}" alt="" style="width:100%;" class="img-rounded">
				    </div>

					<div class="item">
						<img src="{{ asset('image/slider-02.jpg')}}" alt="" style="width:100%;" class="img-rounded">
					</div>
					<div class="item">
						<img src="{{ asset('image/slider-05.jpg')}}" alt="" style="width:100%;" class="img-rounded">
					</div>
			</div>
		</div>
	</div>
</section>
<!---->
<section class="sanphamhot">
	<div class="container-fluid">
		<div><h2>Hot trong ngày</h2><hr></div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/baynhe.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/ha_noi.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/the_gioi.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/tu_do.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
	</div>
</section>
<section class="thoitrangnam">
	<div class="container-fluid">
		<div><h2>Thời trang nam</h2><hr></div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/bach_tuoc.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/m_cao_hon_t.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/nice_day.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/raglan.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
	</div>
</section>
<section class="thoitrangnu">
	<div class="container-fluid">
		<div><h2>Thời trang nữ</h2><hr></div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/tron_do.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/thun_tay_dai.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/suon_bo_nuong.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="iteam">
					<img src="{{ asset('image/pizza.png')}}" style="width: 100%">
					<button class="btn-default">Thêm vào giỏ</button>
					<button class="btn-default">Mặc thử</button>
				</div>
			</div>
	</div>
</section>
<section class="map">
	<div class="container-fluid">
		<div class="col-md-6">
			<div class="map_title">
				<h2>DỊCH VỤ GIAO HÀNG</h2>
				<hr/>
			</div>
			<div class="img_giaohang">
				<img src="{{ asset('image/logo-ghtk.png')}}">
				<img src="{{ asset('image/ghn.jpg')}}">
			</div>
		</div>
		<div class="col-md-6">
			<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4659.970478682432!2d106.77693006438639!3d10.84551990777639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175270dda7cfa59%3A0x276eb79e46ce1c9b!2zVmluY29tIFBsYXphIEzDqiBWxINuIFZp4buHdA!5e0!3m2!1svi!2s!4v1501747387228" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
		</div>
	</div>
</section>
@stop