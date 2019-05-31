<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    //
    public  function user()
    {
        $this->belongsTo('App\User');
    }
    public  function order_details()
    {
        $this->hasMany('App\Order_details');
    }
    public  function products()
    {
        $this->hasMany('App\Products');
    }
}
