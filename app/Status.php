<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'tinh_trang';
    protected $fillable = ['id', 'tinh_trang'];

    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
