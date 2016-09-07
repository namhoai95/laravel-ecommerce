<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'loai_san_pham';
    protected $fillable = ['id','ten_loai','ten_alias','thu_tu','an_hien'];

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
