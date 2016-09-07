@extends('layouts.master')
@section('title', 'Đăng ký tài khoản')
@section('container')
    @include('error')
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
                <div class="col-md-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Đăng ký tài khoản mới</h2>
                        <form class="form-horizontal" action="{{ action('Auth\AuthController@postRegister') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Họ tên</label>
                                <input type="text" placeholder="Tên" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                <p id="alert"></p>
                            </div>
                            <div class="form-group">
                                <label for="phone">Điện thoại</label>
                                <input type="text" placeholder="Điện thoại" name="phone" value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" placeholder="Mật khẩu" name="password">
                            </div>
                            <div class="form-group">
                                <label for="repassword">Nhập lại mật khẩu</label>
                                <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                            </div>
                            {!! app('captcha')->display() !!}
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section>
@endsection