<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link rel="stylesheet" href="{{ asset('css/quanly.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css')}}"/>
        <title>Demo @yield('title')</title>
    </head>
    <body>
        <section class="section_header">
            <div class="header_top">
                <div class="container-fluid box_logo">
                    <div class="header_top_logo">
                        <div class="col-md-12">
                            <div class="col-md-3 logo">
                                <a href="/"><img src="{{ asset('image/logo.png') }}"></a>
                            </div>
                            <div class="col-md-6 search">
                                <div class="col-md-10 search_input"><input type="text" name="search" class="form-control input-sm"></div>
                                <div class="col-md-2 button"><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></div>
                            </div>
                            <div class="col-md-3 chinhhang">
                                <img src="{{ asset('image/100_chinh_hang.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
                @yield('menu')
            </div>
        </section>
        @yield('slider')
        @yield('content')
        <section class="section_footer">
            <div class="footer">
                <div class="container-fluid py-3">
                    <div class="col-md-10">
                        <div class="col-md-4">
                            <h2>Liên hệ với shop</h2>
                            <p>Thứ 2 - Chủ Nhật: 7h-21h</p>
                            <p></p>
                        </div>
                        <div class="col-md-4">
                            <h2>Liên hệ với shop</h2>
                            <p>Thứ 2 - Chủ Nhật: 7h-21h</p>
                            <p></p>
                        </div>
                        <div class="col-md-4">
                            <h2>Liên hệ với shop</h2>
                            <p>Thứ 2 - Chủ Nhật: 7h-21h</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FThu%E1%BB%91c-%C4%90%E1%BA%B7t-Tr%E1%BB%8B-M%E1%BB%A5n-1391039040953800%2F&tabs&width=200&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="200" height="200" style="border:none;overflow:hidden;margin: 10px;" scrolling="no" frameborder="0" allowTransparency="true"></iframe></p>
                    </div>
                </div>
            </div>
        </section>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('js/product_slider.js')}}"></script>
    <script src="{{ asset('slick/slick.min.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>
