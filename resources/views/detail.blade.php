@extends('layouts.master')
@section('title','Chi tiết sản phẩm')

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
                                        <h4 class="panel-title"><a href="{{ asset('products') }}">{{ $item->ten_loai }}</a></h4>
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
                            <img src="{{ asset('images/home/shipping.jpg') }}" alt="" />
                        </div><!--/shipping-->
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ asset('images/products/' . $product->url_hinh) }}" alt="" />
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <h2>{{ $product->ten_san_pham }}</h2>
                                <img src="{{ asset('images/product-details/rating.png') }}" alt="{{ $product->ten_san_pham }}" />
                                <span>
                                    <span>{{ number_format($product->gia,0) . ' VNĐ' }}</span>
                                    <label>Số lượng:</label>
                                    <input type="text" value="1" />
                                    <a href="{{ url('buy',['id' => $product->id]) }}"><button type="button" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button></a>
                                </span>
                                <p><b>Tình trạng:</b>
                                    @if($product->ton_kho > 0) Còn hàng @else Hết hàng @endif</p>
                                <p><b>Số lượt xem:</b> {{ $product->so_lan_xem }}</p>
                                <a href="">
                                    <img src=" {{ asset('images/product-details/share.png') }}" class="share img-responsive"  alt="" /></a>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Chi tiết</a></li>
                                <li><a href="#reviews" data-toggle="tab">Đánh giá ({{ $productsCount }})</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="details" >
                                <div class="col-sm-12">
                                    <p>{!! $product->mo_ta !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="companyprofile" >

                            </div>

                            <div class="tab-pane fade" id="tag" >

                            </div>

                            <div class="tab-pane fade" id="reviews" >
                                <div id="comments-product">
                                    @include('comments-product')
                                </div>
                                <div>
                                    <p><b>Viết nhận xét của bạn</b></p>
                                    <form method="post">
                                        {!! csrf_field() !!}
                                        <span>
											<input id="name" name="name" value="{{ Auth::check() ? Auth::user()->name : old('name') }}" type="text" placeholder="Tên Của Bạn"/>
										</span>
                                        <textarea id="content" name="content" >{{ old('content')  }}</textarea>
                                        <button id="{{ $product->id }}" type="button" class="btn btn-default pull-right">
                                            Đánh giá
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--/category-tab-->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else {
                    getComments(page);
                }
            }
        });

        $(window).ready(function() {
            $(document).on('click','.pagination a',function(e) {
                getComments($(this).attr('href').split('page=')[1]);
                e.preventDefault();
            });
        });

        function getComments(page) {
            $.ajax({
                url: '?page=' + page
            }).done(function(data) {
                $('#comments-product').html(data);
                location.hash = page;
                history.pushState(null,'Chi tiết sản phẩm','?page=' + page);
            });
        }
    </script>
@endsection