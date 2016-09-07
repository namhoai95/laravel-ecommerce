@extends('admin.layouts.master')
@section('title','Danh sách người dùng')
@section('content')
    <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách người dùng
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
                        <a href="{{ asset('admin/user/create') }}" class="">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Thêm người dùng
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
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Level</th>
                                    <th>Thời gian tạo</th>
                                    <th>Thời gian cập nhật</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($user as $aUser)
                                    <tr>
                                        <td>{{ $aUser->id }}</td>
                                        <td>{{ $aUser->name }}</td>
                                        <td>{{ $aUser->email }}</td>
                                        <td>{{ $aUser->phone }}</td>
                                        <td>
                                            @if($aUser->id == 1 && $aUser->level == 1)
                                                SuperAdmin
                                            @elseif($aUser->level == 1)
                                                Admin
                                            @else
                                                Người dùng
                                            @endif
                                        </td>
                                        <td>{!! \Carbon\Carbon::createFromTimestamp(strtotime($aUser->created_at))->diffForHumans() !!}</td>
                                        <td>{!! \Carbon\Carbon::createFromTimestamp(strtotime($aUser->updated_at))->diffForHumans() !!}</td>
                                        <td>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="{{ action('Admin\AdminUserController@delete', ['id' => $aUser->id]) }}" class="btn btn-danger" id="delete">Xóa</a>
                                            <a href="{{ action('Admin\AdminUserController@getEdit', ['id' => $aUser->id]) }}" class="btn btn-primary">Cập nhật</a>
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