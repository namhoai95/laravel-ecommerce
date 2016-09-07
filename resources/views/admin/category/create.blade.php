@extends('admin.layouts.master')
@section('title','Thêm chủng loại')
@section('content')
    <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm chủng loại mới
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <form role="form" action="{{ route('admin.category.getCreate') }}" method="post">
                        <div class="toolbar">
                            <a href="{{ asset('admin/category/list') }}" class="">
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
                                            <label for="nameProduct">Tên chủng loại</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nhập tên chủng loại">
                                        </div>
                                        <div class="form-group">
                                            <label for="position">Thứ tự</label>
                                            <input type="text" class="form-control" id="position" name="position" value="{{ old('position') }}" placeholder="Nhập thứ tự">
                                        </div>
                                        <div class="form-group">
                                            <label for="hide">Ẩn hiện</label>
                                            <select name="hide" id="hide">
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiện</option>
                                            </select>
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