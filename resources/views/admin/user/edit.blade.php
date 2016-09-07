@extends('admin.layouts.master')
@section('title','Cập nhật người dùng')
@section('content')
    <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cập nhật người dùng
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <form role="form" action="{{ action('Admin\AdminUserController@postEdit', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                        <div class="toolbar">
                            <a href="{{ asset('admin/user/list') }}" class="">
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
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <label for="name">Họ tên</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', isset($user->name) ? $user->name : null) }}" placeholder="Nhập họ tên">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Mật khẩu</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <label for="repassword">Mật khẩu</label>
                                            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Điện thoại</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', isset($user->phone) ? $user->phone : null) }}" placeholder="Nhập số điện thoại">
                                        </div>
                                        @if(Auth::user()->id != $id)
                                            <div class="form-group">
                                                <label for="level">Cấp độ</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="level" value="1" {{ $user->level == 1 ? 'checked' : null }}>Admin
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="level" value="2" {{ $user->level == 2 ? 'checked' : null }}>Người dùng
                                                </label>
                                            </div>
                                        @endif
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
@section('script')
    <script>
        $("div.alert").delay(5000).slideUp();
    </script>
@endsection