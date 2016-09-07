@extends('layouts.master')
@section('title','Thông tin cá nhân')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('error')
            </div>
        </div>
    </div>
    @if(Session::has('flashMessage'))
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="alert alert-{!! Session::get('flashLevel') !!}">
                        {!! Session::get('flashMessage') !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="login-form"><!--login form-->
                        <h2>Thông tin tài khoản</h2>
                        <form action="{{ action('Auth\AuthController@postEditInfo',['id' => Auth::user()->id ]) }}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="name">Tên</label>
                                <input type="text" placeholder="Họ tên" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Email" name="email" value="{{ $user->email }}">
                            </div>
                            <button type="submit">Cập nhật thông tin</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-md-6">
                    <div class="login-form">
                        <h2>Đổi mật khẩu</h2>
                        <form action="{{ action('Auth\PasswordController@postEditPassword',['id' => Auth::user()->id]) }}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="password">Mật khẩu cũ</label>
                                <input type="password" placeholder="Mật khẩu cũ" name="password">
                            </div>
                            <div class="form-group">
                                <label for="newpassword">Mật khẩu mới</label>
                                <input type="password" placeholder="Mật khẩu mới" name="newpassword">
                            </div>
                            <div class="form-group">
                                <label for="renewpassword">Nhập lại mật khẩu mới</label>
                                <input type="password" placeholder="Nhập lại mật khẩu mới" name="renewpassword">
                            </div>
                            <button type="submit">Đổi mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection