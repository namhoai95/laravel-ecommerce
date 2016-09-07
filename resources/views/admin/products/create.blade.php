@extends('admin.layouts.master')
@section('title','Thêm sản phẩm')
@section('content')
    <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm sản phẩm mới
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <form role="form" action="{{ route('admin.products.getCreate') }}" method="post" enctype="multipart/form-data">
                        <div class="toolbar">
                            <a href="{{ asset('admin/products/list') }}" class="">
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
                                            <label for="nameProduct">Tên sản phẩm</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nhập tên sản phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label for="priceProduct">Giá</label>
                                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" placeholder="Nhập giá sản phẩm">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Mô tả</label>
                                            <textarea style="display: block" name="description" id="" cols="170" rows="10">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="image">Chọn hình</label>
                                            <input type="file" id="image" name="image">
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Ngày nhập</label>
                                            <input type="date" class="form-control" id="date" name="date">
                                        </div>
                                        <div class="form-group">
                                            <label for="number">Số lượng</label>
                                            <input type="text" class="form-control" id="number" name="number" value="{{ old('number') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="hide">Ẩn hiện</label>
                                            <select name="hide" id="hide">
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiện</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kindProduct">Loại</label>
                                            <select name="category" id="category">
                                                @foreach($category as $item)
                                                    <option value="{{ $item->id }}">{{ $item->ten_loai }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="producer">Thương hiệu</label>
                                            <select name="producer" id="producer">
                                                @foreach($manufacturer as $item)
                                                    <option value="{{ $item->id }}">{{ $item->ten_thuong_hieu }}</option>
                                                @endforeach
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

@section('footer')
    <script>
        document.getElementById('date').valueAsDate = new Date();
    </script>
@endsection