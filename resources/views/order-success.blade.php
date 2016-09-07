@extends('layouts.master')
@section('title','Thanh toán thành công')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Chúc mừng: <b>{{ $name }}</b> đã mua hàng với tổng tiền là: {{ number_format($total,0) }}
                </div>
            </div>
        </div>
    </div>
@endsection