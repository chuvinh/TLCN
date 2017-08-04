<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css')}}"/>
        <title>Demo @yield('title')</title>
    </head>
    <body>
        <section class="section_header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 header_top">
                        <div class="col-md-3">
                            <div class="header_top_logo">
                                <img src="{{ asset('image/logo.png') }}" >
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="header_top_menu">
                                <ul>
                                    <li><a href="/donam"><span class="glyphicon glyphicon-list-alt"></span> Đồ Nam</a></li>
                                    <li><a href="/donu"><span class="glyphicon glyphicon-list-alt"></span> Đồ Nữ</a></li>
                                    <li><a href="/sale"><span class="glyphicon glyphicon-gift"></span> Hàng đang sale</a></li>
                                    <li><a href="/huongdan"><span class="glyphicon glyphicon-pencil"></span> Hướng dẫn mua hàng</a></li>
                                    <li><a href="/lienhe"><span class="glyphicon glyphicon-inbox"></span> Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-12 header_main">
                        <div class="col-md-6 chuchay">
                            <div class="box_chuchay">
                                <marquee>Chào mừng bạn đến với shop thời trang của chúng tôi. Chúc bạn một ngày vui vẻ.</marquee>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header_main_menu">
                                <ul>
                                    <li><a href="/dangnhap"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                                    <li><a href="/dangky"><span class="glyphicon glyphicon-edit"></span> Đăng ký</a></li>
                                    <li><a href="/giohang"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
                                    <div class="col-sm-4 col-md-4 input-group stylish-input-group">
                                        <input type="text" class="form-control"  placeholder="Search">
                                        <span class="input-group-addon">
                                            <button type="submit">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>  
                                        </span>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @yield('slider')
        @yield('content')
        <section class="section_footer">
            <div class="footer">
                <div class="container-fluid py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row py-0">
                                    <div class="col-sm-1 hidden-md-down" style="padding: 5px">
                                        <a class="bg-circle bg-info" href="#">
                                            <img src="{{ asset('image/logo.png') }}" >
                                        </a>
                                    </div>
                                    <div class="col-sm-11 text-white">
                                        <div class="diachi">
                                            <h4>  Liên hệ: </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5" style="margin-top: 7px">
                                <div class="d-inline-block">
                                    <div class="bg-circle-outline d-inline-block" style="background-color:#3b5998">
                                        <a href="https://www.facebook.com/"><span class="fa fa-facebook"></span>
                                        </a>
                                    </div>
                                    <div class="bg-circle-outline d-inline-block" style="background-color:#4099FF">
                                        <a href="https://twitter.com/">
                                            <i class="fa fa-2x fa-fw fa-twitter text-white"></i>
                                        </a>
                                    </div>
                                    <div class="bg-circle-outline d-inline-block" style="background-color:#d34836">
                                        <a href="https://www.google.com/">
                                            <i class="fa fa-2x fa-fw fa-google text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('js/product_slider.js')}}"></script>
    <script src="{{ asset('slick/slick.min.js')}}"></script>
    </body>
</html>
