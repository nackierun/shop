<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $guarded = [];
    public function products()
    {
        return $this->belongsTo('App\Product');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
