<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'chi_tiet_don_hang';
    protected $fillable = ['id', 'so_luong','gia_ban','id_don_dat_hang','id_san_pham'];

    public function product()
    {
        return $this->hasMany('App\Product');
    }

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
