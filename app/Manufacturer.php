<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = 'thuong_hieu';
    protected $fillable = ['id','ten_thuong_hieu','ten_alias','thu_tu','an_hien'];

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
