<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    //
    protected $guarded = [];
    public function orders()
    {
        $this->belongsTo('App\Orders');
    }
}
