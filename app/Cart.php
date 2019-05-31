<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $guarded = [];
    public function category()
    {
        return $this->hasmany('App\Product');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
