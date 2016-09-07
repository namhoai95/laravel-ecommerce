@extends('admin.layouts.master')
@section('title','Danh sách sản phẩm')
@section('content')
    <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sản phẩm
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="toolbar">
                        <a href="{{ asset('admin/products/list') }}" class="">
                            <button type="button" class="btn btn-info">
                                <i class="fa fa-refresh"></i> Refresh
                            </button>
                        </a>
                        <a href="{{ asset('admin/products/create') }}" class="">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Thêm sản phẩm
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
                            <h3 class="box-title">Bảng Sản Phẩm</h3>
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
                                    <th>Tên sản phẩm</th>
                                    <th>Giá </th>
                                    <th>Ngày nhập</th>
                                    <th>Số lượng</th>
                                    <th>Số lần mua</th>
                                    <th>Số lần xem</th>
                                    <th>Hiện</th>
                                    <th>Loại</th>
                                    <th>Thương hiệu</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($products as $product)
                                    <tr id="product-{{ $product->id }}">
                                        <td>{{ $product->id }}</td>
                                        <td><a href="{{ asset('detail') . '/' . $product->ten_alias . '-' . $product->id . '.html' }}">{{ $product->ten_san_pham }}</a></td>
                                        <td>{{ number_format($product->gia,0) }}</td>
                                        <td>{!! \Carbon\Carbon::createFromTimestamp(strtotime($product->ngay_nhap))->diffForHumans() !!}</td>
                                        <td>{{ $product->ton_kho }}</td>
                                        <td>{{ $product->so_lan_mua }}</td>
                                        <td>{{ $product->so_lan_xem }}</td>
                                        <td>
                                            <select name="hide" class="hide-product" id="{{ $product->id }}">
                                                <option {{ $product->an_hien == 0 ? 'selected' : '' }} value="0">Ẩn</option>
                                                <option {{ $product->an_hien == 1 ? 'selected' : '' }} value="1">Hiện</option>
                                            </select>
                                        </td>
                                        <td>{{ $product->ten_loai }}</td>
                                        <td>{{ $product->ten_thuong_hieu }}</td>
                                        <td>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="javascript:" class="btn btn-danger product" id="{{ $product->id }}">Xóa</a>
                                            <a href="{{ action('Admin\AdminProductController@edit', ['id' => $product->id]) }}" class="btn btn-primary">Cập nhật</a>
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