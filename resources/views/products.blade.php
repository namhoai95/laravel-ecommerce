@extends('layouts.master')
@section('title','Sản phẩm')

@section('advertisement')
    <section id="advertisement">
        <div class="container">
            <img src="{{ asset('images/shop/advertisement.jpg') }}" alt="" />
        </div>
    </section>
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


                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    </div>
                </div>
                <div id="product-item">
                    @include('product-item')
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
                    getProducts(page);
                }
            }
        });

        $(window).ready(function() {
            $(document).on('click','.pagination a',function(e) {
                getProducts($(this).attr('href').split('page=')[1]);
                e.preventDefault();

            });
        });

        function getProducts(page) {
            $.ajax({
                url: '?page=' + page
            }).done(function(data) {
                $('#product-item').html(data);
                location.hash = page;
                history.pushState(null,'Sản phẩm','?page=' + page);
            });
        }
    </script>

@endsection

