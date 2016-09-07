@extends('layouts.master')
@section('title','Liên hệ')

@section('container')
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Liên hệ chúng tôi</h2>
                    <div id="map" class="contact-map">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Liên lạc</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="{{ action('ContactController@postContact') }}">
                            {!! csrf_field() !!}
                            <div class="form-group col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Họ tên">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message"  class="form-control" rows="8" placeholder="Tin nhắn"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Liên lạc">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Thông tin liên lạc</h2>
                        <address>
                            <p>Scepter Inc.</p>
                            <p>235 Nguyễn Văn Cừ, Quận 5</p>
                            <p>Mobile: +84 123 7345564</p>
                            <p>Email: namhoai95@gmail</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Mạng xã hội</h2>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/#contact-page-->
@endsection