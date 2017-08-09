@extends('welcome')
@section('menu')
<div class="container-fluid box_menu">
    <div class="header_top_menu">
        <nav class="navbar">
            <ul class="nav navbar-nav ">
                <li><a href="/do-nam"><span class="glyphicon glyphicon-list-alt"></span> Thời trang nam</a></li>
                <li><a href="do-nu"><span class="glyphicon glyphicon-list-alt"></span> Thời trang nữ</a></li>
                <li><a href="/sale"><span class="glyphicon glyphicon-gift"></span> Hàng đang sale</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Hướng dẫn mua hàng</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-inbox"></span> Liên hệ</a></li>
                <li><a href="/dang-nhap"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                <li><a href="/dang-ky"><span class="glyphicon glyphicon-edit"></span> Đăng ký</a></li>
                <li><a href="/gio-hang"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
            </ul>
        </nav>
    </div>
</div>
@stop