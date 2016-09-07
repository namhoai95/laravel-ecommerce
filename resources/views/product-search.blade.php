@extends('layouts.master')
@section('title','Sản phẩm')

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
                                        <h4 class="panel-title"><a href="{{ asset('products') . '/' . $item->ten_alias }}">{{ $item->ten_loai }}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($manufacturer as $item)
                                        <li><a href="{{ asset('manufacturer') . '/' . $item->id }}"> <span class="pull-right"></span>{{ $item->ten_thuong_hieu }}</a></li>
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

                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Sản phẩm tìm kiếm</h2>
                        @if(count($product) === 0)
                            <p class="alert alert-danger">Không có sản phẩm bạn tìm kiếm</p>
                        @else
                            @foreach($product as $item)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ asset('images/products/' . $item->url_hinh) }}" alt="" />
                                                <h2>{{ number_format($item->gia,0) . ' VNĐ' }}</h2>
                                                <p>{{ $item->ten_san_pham }}</p>
                                                <a href="{{ url('buy',['id' => $item->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2>{{ number_format($item->gia,0) . ' VNĐ' }}</h2>
                                                    <p>{{ $item->ten_san_pham }}</p>
                                                    <a href="{{ url('buy',['id' => $item->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">
                                                <li><a href="{{ action('ProductController@show', ['id' =>  $item->id ]) }}"><i class="fa fa-info"></i>Xem chi tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div><!--features_items-->
                    @if(count($product) === 0)
                    @else
                        <div class="text-center">
                            <ul class="pagination">
                                @if($product->currentPage() != 1)
                                    <li><a href="{!!  $product->appends(['search' => $keyword])->url($product->currentPage() - 1) !!}">Trước</a></li>
                                @endif
                                @for($i = 1; $i <= $product->lastPage(); $i++)
                                    <li class="{!! $product->currentPage() == $i ? 'active' : '' !!}"><a href="{!! $product->appends(['search' => $keyword])->url($i) !!}">{{ $i }}</a></li>
                                @endfor
                                @if($product->currentPage() != $product->lastPage())
                                    <li><a href="{!!  $product->appends(['search' => $keyword])->url($product->currentPage() + 1) !!}">Sau</a></li>
                                @endif
                            </ul>
                        </div>
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection
