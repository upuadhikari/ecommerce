<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\products;


class categories extends Model
{

    public function products()
    {
          return $this->hasMany(products::class);
    }
}