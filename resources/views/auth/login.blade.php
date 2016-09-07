@extends('layouts.master')
@section('title','Đăng nhập')

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
                <div class="col-md-4">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập tài khoản</h2>
                        <form action="{{ action('Auth\AuthController@postLogin') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" placeholder="Mật khẩu" name="password">
                            </div>
							<span>
								<input type="checkbox" class="checkbox">
								Giữ đăng nhập
							</span>
                            <button type="submit" class="btn btn-default">Đăng nhập</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-md-4 col-lg-offset-2">
                    <div class="login-form">
                        <h2>Bạn chưa có tài khoản ? </br>Xin vui lòng đăng ký tại <a href="{{ asset('user/register') }}">đây</a></h2>
                    </div>
                    <div class="login-form">
                        <h2>Bạn quên mật khẩu ? </br>Xin vui lòng nhấn tại <a href="{{ asset('password/email') }}">đây</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection