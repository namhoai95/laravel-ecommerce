@extends('admin.layouts.master')
@section('title','Cập nhật chủng loại')
@section('content')
    <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cập nhật thương hiệu
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <form role="form" action="{{ action('Admin\AdminManufacturerController@postEdit', ['id' => $manufacturer->id ]) }}" method="post">
                        <div class="toolbar">
                            <a href="{{ asset('admin/manufacturer/list') }}" class="">
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
                                        <div class="form-group">
                                            <label for="nameProduct">Tên thương hiệu</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{!! old('name', isset($manufacturer->ten_thuong_hieu) ? $manufacturer->ten_thuong_hieu : null) !!}" placeholder="Nhập tên thương hiệu">
                                        </div>
                                        <div class="form-group">
                                            <label for="position">Thứ tự</label>
                                            <input type="text" class="form-control" id="position" name="position" value="{!! old('position', isset($manufacturer->thu_tu) ? $manufacturer->thu_tu : null) !!}" placeholder="Nhập thứ tự">
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