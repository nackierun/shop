<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $table='cart';
    protected $primaryKey='id';
    protected $fillable=['products_id','product_name','size','price','quantity','user_email','session_id'];
}
