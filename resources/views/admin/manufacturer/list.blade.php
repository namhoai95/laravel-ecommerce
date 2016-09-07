@extends('admin.layouts.master')
@section('title','Danh sách chủng loại')
@section('content')
    <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thương hiệu
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="toolbar">
                        <a href="{{ asset('admin/manufacturer/list') }}" class="">
                            <button type="button" class="btn btn-info">
                                <i class="fa fa-refresh"></i> Refresh
                            </button>
                        </a>
                        <a href="{{ asset('admin/manufacturer/create') }}" class="">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Thêm thương hiệu
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
                            <h3 class="box-title">Bảng Thương Hiệu</h3>
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
                                    <th>Tên thương hiệu</th>
                                    <th>Thứ tự</th>
                                    <th>Ẩn hiện</th>
                                    <th>Thời gian tạo</th>
                                    <th>Thời gian cập nhật</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($manufacturers as $manufacturer)
                                    <tr id="manufacturer-{{ $manufacturer->id }}">
                                        <td>{{ $manufacturer->id }}</td>
                                        <td>{{ $manufacturer->ten_thuong_hieu }}</td>
                                        <td>{{ $manufacturer->thu_tu }}</td>
                                        <td>
                                            <select name="hide" class="hide-manufacturer" id="{{ $manufacturer->id }}">
                                                <option {{ $manufacturer->an_hien == 0 ? 'selected' : '' }} value="0">Ẩn</option>
                                                <option {{ $manufacturer->an_hien == 1 ? 'selected' : '' }} value="1">Hiện</option>
                                            </select>
                                        </td>
                                        <td>{!! \Carbon\Carbon::createFromTimestamp(strtotime($manufacturer->created_at))->diffForHumans() !!}</td>
                                        <td id="updated-manufacturer-{{ $manufacturer->id }}">{!! \Carbon\Carbon::createFromTimestamp(strtotime($manufacturer->updated_at))->diffForHumans() !!}</td>
                                        <td>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger manufacturer" href="javascript:" id="{{ $manufacturer->id }}">Xóa</a>
                                            <a class="btn btn-primary" href="{{ action('Admin\AdminManufacturerController@getEdit', ['id' => $manufacturer->id]) }}">Cập nhật</a>
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