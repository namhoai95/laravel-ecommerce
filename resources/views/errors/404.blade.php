@section('title','404')
@extends('layouts.master')
@section('container')
<body>
<div class="container text-center">
    <div class="logo-404">
        <a href="/"><img src="{{ asset('images/home/logo.png') }}" alt="" /></a>
    </div>
    <div class="content-404">
        <img src="{{ asset('images/404/404.png') }}" class="img-responsive" alt="" />
        <h1><b>Rất tiếc!</b> Không thể tìm thấy trang</h1>
        <p>Có vẻ bạn đang tìm kiếm trang sai, vui lòng kiểm tra lại.</p>
        <h2><a href="/">trở về trang chủ</a></h2>
    </div>
</div>
@endsection