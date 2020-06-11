<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $table='carts';
    protected $fillable = ['product_id', 'sessionkey', 'quantity',];
}