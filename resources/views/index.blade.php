@extends('layouts.master')
@section('title', 'Trang chủ')

@section('slider')
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>S</span>CEPTER</h1>
                                    <p>SCEPTER là một cửa hàng bán gaming gear dành cho game thủ. </p>
                                    <a href="{{ asset('products') }}"><button type="button" class="btn btn-default get">Mua sản phẩm</button></a>
                                </div>
                                <div class="col-sm-6">
                                    <!--<img src="{{ asset('images/home/razer_logo.jpg') }}" class="girl img-responsive" alt="" />-->
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/slider-->
@endsection

@section('container')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Loại sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($category as $item)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="{{ asset('products') . '/' . $item->ten_alias }}">{{ $item->ten_loai }}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($manufacturer as $item)
                                        <li><a href="{{ asset('manufacturer') . '/' . $item->ten_alias }}"> <span class="pull-right"></span>{{ $item->ten_thuong_hieu }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Tìm kiếm</h2>
                            <form action="{{ action('ProductController@searchAdvanced') }}">
                                <div class="well text-center">
                                    <label>Nổi bật/Bán chạy</label>
                                    <select name="hot" id="hot">
                                        <option value="1">Nổi bật</option>
                                        <option value="2">Bán chạy</option>
                                    </select>
                                    <label>Giá</label>
                                    <select name="price" id="price">
                                        <option value="1">Nhỏ hơn 1.000.000 VNĐ</option>
                                        <option value="2">Nhỏ hơn 5.000.000 VNĐ</option>
                                        <option value="3">Nhỏ hơn 7.000.000 VNĐ</option>
                                    </select>
                                    <label>Loại</label>
                                    <select name="category" id="category">
                                        @foreach($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->ten_loai }}</option>
                                        @endforeach
                                    </select>
                                    <label>Thương hiệu</label>
                                    <select name="manufacturer" id="manufacturer">
                                        @foreach($manufacturer as $item)
                                            <option value="{{ $item->id }}">{{ $item->ten_thuong_hieu }}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                                </div>
                            </form>
                        </div><!--/price-range-->
                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Sản phẩm mới</h2>
                        @foreach($product as $item)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src=" {{ asset('images/products') . '/' . $item->url_hinh}}" alt="" />
                                            <h2>{{ number_format($item->gia,0) . ' VNĐ' }}</h2>
                                            <p>{{ $item->ten_san_pham }}</p>
                                            <a href="{!! url('buy',['id' => $item->id]) !!}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{ number_format($item->gia,0) . ' VNĐ' }}</h2>
                                                <p> {{ $item->ten_san_pham }}</p>
                                                <a href="{!! url('buy',['id' => $item->id]) !!}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="{{ asset('detail') . '/' . $item->ten_alias . '-' . $item->id . '.html' }}"><i class="fa fa-info"></i>Xem chi tiết</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>
@endsection