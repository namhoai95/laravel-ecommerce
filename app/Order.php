<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'don_dat_hang';
    protected $fillable = ['id', 'ngay_lap', 'tong_thanh_tien','dia_diem_giao','dien_thoai','id_tai_khoan','id_tinh_trang','ten_nguoi_mua'];

    public function orderdetail()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
