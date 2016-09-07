<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'san_pham';
    protected $fillable = ['id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','so_lan_mua','so_lan_xem','id_thuong_hieu','id_loai','an_hien'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }
}
