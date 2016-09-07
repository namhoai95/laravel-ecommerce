@extends('admin.layouts.master')
@section('title','Trang chủ')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $ordercount }}</h3>
              <p>Đơn đặt hàng</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ url('admin/order/list') }}" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $categorycount }}</h3>
              <p>Chủng loại</p>
            </div>
            <div class="icon">
              <i class="ion ion-cube"></i>
            </div>
            <a href="{{ url('admin/category/list') }}" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $usercount }}</h3>
              <p>Người dùng</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ url('admin/user/list') }}" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $productcount }}</h3>
              <p>Sản phẩm</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('admin/products/list') }}" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $manufacturercount }}</h3>
              <p>Thương hiệu</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('admin/manufacturer/list') }}" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->
      </div><!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <script type="text/javascript">
          google.load("visualization", "1.1", {packages:["bar"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Thống kê', 'Số lượng'],
              <?php
              $element_text = ['Sản phẩm','Chủng loại','Thương hiệu', 'Người dùng', 'Đơn đặt hàng'];
              $element_count = [$productcount,$categorycount,$manufacturercount, $usercount, $ordercount];
              for($i = 0; $i < 5; $i++) {
                echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
              }
              ?>

            ]);

            var options = {
              chart: {
                title: '',
                subtitle: '',
              }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, options);
          }
        </script>
        <div id="columnchart_material" style="width: auto; height: 500px;"></div>
      </div>
    </section>
  </div><!-- ./wrapper -->
@endsection