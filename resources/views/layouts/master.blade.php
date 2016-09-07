<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Scepter">
    <meta name="author" content="Nam Hoai">
    <title>@yield('title') | Scepter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href=" {{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href=" {{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href=" {{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
    <link rel="shortcut icon" href="{{ asset('images/home/scepter.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            @if(Auth::check())
                                <li><a href="#"><i class="fa fa-phone"></i> {{ Auth::user()->phone }}</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> {{ Auth::user()->email}}</a></li>
                                @if(Auth::user()->level == 1)
                                    <li><a href="{{ asset('admin') }}"><i class="fa fa-user"></i> Admin</a></li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/">
                            <img src="{{ asset('images/home/logo.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                VNĐ
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @if(Auth::check())
                                <li><a href="{{ action('Auth\PasswordController@getEditPassword',['id' => Auth::user()->id]) }}"><i class="fa fa-user"></i> Tài khoản</a></li>
                            @endif
                            <li><a href="{{ asset('pay') }}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <li><a href="{{ asset('cart') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            @if(Auth::check())
                                <li><a href="{{ asset('auth/logout') }}"><i class="fa fa-sign-out"></i> Thoát</a></li>
                            @else
                                <li><a href="{{ asset('user/login') }}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active">Trang chủ</a></li>
                            <li class="dropdown"><a href="#">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ asset('products') }}">Sản phẩm</a></li>
                                    <li><a href="{{ asset('pay') }}">Thanh toán</a></li>
                                    <li><a href="{{ asset('cart') }}">Giỏ hàng</a></li>
                                    <li><a href="{{ asset('user/login') }}">Đăng nhập</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ asset('contact') }}">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5">
                    <form action="{{ action('ProductController@search') }}" method="get">
                        <div class="ui-widget">
                            <input id="tags" name="search" placeholder="Tìm kiếm">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

@section('slider')
@show

@section('advertisement')
@show

@section('container')
@show

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>S</span>-Shopper</h2>
                        <p>S-Shopper là  một cửa hàng bán gaming gear dành cho game thủ. </p>
                    </div>
                </div>
                <div class="col-sm-7">
                </div>
                <div class="col-sm-3 pull-right">
                    <div class="address">
                        <img src="{{ asset('images/home/map.png') }}" alt="" />
                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Dịch vụ</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Hỗ trợ trực tuyến</a></li>
                            <li><a href="#">Liên hệ chúng tôi</a></li>
                            <li><a href="#">Tình trạng đơn hàng</a></li>
                            <li><a href="#">Thay đổi địa điểm</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Các loại sản phẩm</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Chuột</a></li>
                            <li><a href="#">Bàn phím</a></li>
                            <li><a href="#">Tai Nghe</a></li>
                            <li><a href="#">Mousepad</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Chính sách</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Điều khoản sử dụng</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Chính sách hoàn tiền</a></li>
                            <li><a href="#">Hệ thống thanh toáns</a></li>
                            <li><a href="#">Hệ thống vé</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Thông tin</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Thông tin công ty</a></li>
                            <li><a href="#">Tuyển dụng</a></li>
                            <li><a href="#">Vị trí cửa hàng</a></li>
                            <li><a href="#">Chương trình liên kết</a></li>
                            <li><a href="#">Bản quyền</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>Thông tin Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Địa chỉ email của bạn" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Nhận những cập nhật mới nhất từ trang web của chúng tôi</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2015 Scepter Inc. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->


<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="http://cdn.jsdelivr.net/vue/1.0.13/vue.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="   {{ asset('js/jquery-ui.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src=" {{ asset('js/jquery.scrollUp.min.js') }}"></script>
<script src=" {{ asset('js/price-range.js') }}"></script>
<script src=" {{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src=" {{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@section('script')
@show
</body>
</html>
