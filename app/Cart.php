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
}
