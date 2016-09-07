@extends('admin.layouts.master')
@section('title','Danh sách đơn hàng')
@section('content')
    <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách đơn hàng
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="toolbar">
                        <a href="{{ asset('admin/user/list') }}" class="">
                            <button type="button" class="btn btn-info">
                                <i class="fa fa-refresh"></i> Refresh
                            </button>
                        </a>
                        @if(Session::has('flashMessage'))
                            <div class="alert alert-{!! Session::get('flashLevel') !!}">
                                {!! Session::get('flashMessage') !!}
                            </div>
                        @endif
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Bảng Đơn Đặt Hàng</h3>
                            <div class="box-tools">
                                <div class="input-group" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên tài khoản</th>
                                    <th>Email</th>
                                    <th>Tình trạng</th>
                                    <th>Điện thoại</th>
                                    <th>Ngày lập</th>
                                    <th>Tổng tiền</th>
                                    <th>Địa điểm giao</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->tinh_trang }}</td>
                                        <td>{{ $order->dien_thoai }}</td>
                                        <td>{{ \Carbon\Carbon::createFromTimestamp(strtotime($order->ngay_lap))->diffForHumans() }}</td>
                                        <td>{{ number_format($order->tong_thanh_tien,0) }}</td>
                                        <td>{{ $order->dia_diem_giao }}</td>
                                        <td>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger" href="#">Xóa</a>
                                            <a class="btn btn-primary" href="{{ action('Admin\AdminOrderController@getEdit',['id' => $order->id]) }}">Cập nhật</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
@section('script')
    <script>
        $("div.alert").delay(5000).slideUp();
    </script>
@endsection