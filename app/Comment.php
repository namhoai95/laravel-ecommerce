<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'binh_luan';
    protected $fillable = ['id_nguoi_dung','id_san_pham','ten_nguoi_dung','noi_dung'];
}
