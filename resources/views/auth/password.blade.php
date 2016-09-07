@extends('layouts.master')
@section('title', 'Lấy lại mật khẩu')
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
                        <form action="{{ action('Auth\PasswordController@postEmailResetPassword') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" placeholder="Nhập emai" name="email" value="{{ old('email') }}">
                            </div>
                            <button type="submit" class="btn btn-default">Gửi link lấy lại mật khẩu</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section>
@endsection