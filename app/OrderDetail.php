<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $guarded = [];
    public function order()
    {
        $this->belongsTo('App\Order');
    }
    public function products()
    {
        $this->belongsTo('App\Product');
    }
}
