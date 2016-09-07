@extends('admin.layouts.master')
@section('title','Cập nhật đơn hàng')
@section('content')
    <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cập nhật đơn hàng
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <form role="form" action="#" method="post">
                        <div class="toolbar">
                            <a href="{{ asset('admin/order/list') }}" class="">
                                <button type="button" class="btn btn-default">
                                    <i class="fa fa-angle-left"></i> Back
                                </button>
                            </a>
                            <a href="javascript: void(0);">
                                <button type="submit" id="saveForm" class="btn btn-success">
                                    <i class="fa fa-check"></i> Lưu
                                </button>
                            </a>
                        </div>
                        @include('error')
                                <!-- general form elements -->
                        <div class="box box-primary">
                            <!-- form start -->

                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div></div>
                                        <div class="form-group">
                                            <label for="status">Tình trạng</label>
                                            <select name="status" id="status">
                                                @foreach($status as $stt)
                                                    <option {{ $stt->id == $order->id_tinh_trang ? 'selected' : '' }} value="{{ $stt->id  }}">{{ $stt->tinh_trang }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="total">Tổng tiền</label>
                                            <input type="text" name="total" value="{{ old('total',isset($order->tong_thanh_tien) ? number_format($order->tong_thanh_tien, 0, '.', '') : null) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Địa điểm giao</label>
                                            <input type="text" name="address" value="{{ old('address', isset($order->dia_diem_giao) ? $order->dia_diem_giao : null) }}">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                        <!-- Form Element sizes -->
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
        </section><!-- /.content -->
    </div>   <!-- /.row -->
@endsection