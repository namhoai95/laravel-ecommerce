@extends('layouts.master')
@section('title','Giỏ hàng')
@section('container')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Giỏ hàng</li>
                </ol>
            </div>
            <div class="table-responsive cart_info" id="cartTable">
                <table class="table table-condensed" id="table">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản phẩm</td>
                        <td class="description"></td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng</td>
                        <td>Hành động</td>
                    </tr>
                    </thead>
                    <tbody>
                    <form action="">
                        {!! csrf_field() !!}
                        @foreach($content as $item)
                            <tr id="t-{{ $item['rowid'] }}">
                                <td class="cart_product">
                                    <a href=""><img src="{!! asset('images/products') . '/' . $item['options']['img'] !!}" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="{!! asset('details') . '/' . $item['id'] !!}">{!! $item['name'] !!}</a></h4>
                                    <p>Sản phẩm ID: <span class="product">{!! $item['id'] !!}</span></p>
                                </td>
                                <td class="cart_price">
                                    <p>{!! number_format($item['price'],0) !!}</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <input type="hidden" id="rowid" value="{{ $item['rowid'] }}">
                                        <input class="cart_quantity_input" type="number" id="quantity" name="quantity" value="{!! $item['qty'] !!}" title="Số lượng" autocomplete="off" size="2" min="1" max="100">
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price" id="p-{!! $item['rowid'] !!}">{!! number_format($item['price'] * $item['qty'],0)  !!}</p>
                                </td>
                                <td>
                                    <a href="javascript:" title="Cập nhật" class="updatecart" id="{!! $item['rowid'] !!}"><i class="fa fa-2x fa-refresh"></i></a>
                                    <a href="javascript:" title="Xóa" class="deletecart" id="{!! $item['rowid'] !!}"><i class="fa fa-2x fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </form>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Tổng cộng</td>
                                    <td><span class="price_total">{!! number_format($total,0) !!} VNĐ </span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="row">
                <div class=" pull-right">
                    <a class="btn btn-default check_out" href="{{ asset('products') }}">Tiếp tục mua hàng</a>
                    <a class="btn btn-default check_out" href="{{ asset('pay') }}">Thanh toán</a>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
@endsection