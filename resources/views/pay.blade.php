@extends('layouts.master')
@section('title','Thanh toán')

@section('container')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    <li class="active">Thanh toán</li>
                </ol>
            </div><!--/breadcrums-->
            @if(Session::has('flashMessage'))
                <div class="alert alert-{!! Session::get('flashLevel') !!}">
                    {!! Session::get('flashMessage') !!}
                </div>
            @endif
            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="shopper-info">
                            <form action="{{ action('ProductController@postPay') }}" method="post">
                                {!! csrf_field() !!}
                                <p>Thông tin người mua</p>
                                <input type="text" placeholder="Tên người mua" name="name" value="{{ old('name') }}">
                                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                <input type="text" placeholder="Điện thoại" name="phone" value="{{ old('phone') }}">
                                <div class="order-message">
                                    <p>Địa chỉ giao hàng</p>
                                    <textarea name="message" placeholder="Ghi chú về đơn hàng của bạn, ghi chú đặc biệt cho giao hàng tận nơi" rows="16">{!! old('message') !!}</textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">Thanh toán</button>
                                <a class="btn btn-primary" href="{!! asset('products') !!}">Tiếp tục</a>
                                <a class="btn btn-primary" href="{!! asset('cart') !!}">Trở lại giỏ hàng</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment">
                <h2>Xem & Thanh toán</h2>
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Mặt hàng</td>
                        <td class="description"></td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($content as $item)
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="{!! asset('images/products') . '/' . $item['options']['img'] !!}" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="{!! asset('details') . '/' . $item['id'] !!}">{!! $item['name'] !!}</a></h4>
                                <p>Sản phẩm ID: {!! $item['id'] !!}</p>
                            </td>
                            <td class="cart_price">
                                <p>{!! number_format($item['price'],0) !!}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <input class="cart_quantity_input" type="text" name="quantity" value="{!! $item['qty'] !!}" autocomplete="off" size="2">
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{!! number_format($item['price'] * $item['qty'],0)  !!}</p>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Tổng cộng</td>
                                    <td><span>{!! number_format($total,0) !!} VNĐ</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->
@endsection