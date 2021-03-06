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
    public  function orderdetail()
    {
        $this->hasOne('App\OrderDetail');
    }
}
