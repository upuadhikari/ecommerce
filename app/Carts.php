<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $table='carts';
    protected $fillable = ['product_id', 'sessionkey', 'quantity',];
}
