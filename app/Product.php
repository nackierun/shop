<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function cart()
    {
        return $this->hasOne('App\Cart');
    }
    public function orderdetail()
    {
        return $this->hasOne('App\OrderDetail');
    }
}
