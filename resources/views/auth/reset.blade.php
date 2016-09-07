@extends('layouts.master')
@section('title', 'Đổi mật khẩu mới')
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
                        <form action="{{ action('Auth\PasswordController@postResetPassword') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" placeholder="Nhập emai" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" placeholder="Mật khẩu" name="password">
                            </div>
                            <div class="form-group">
                                <label for="repassword">Nhập lại mật khẩu</label>
                                <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                            </div>
                            <button type="submit" class="btn btn-default">Đặt lại mật khẩu</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section>
@endsection