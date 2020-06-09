<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public $table = "products";
    protected $fillable = ['name','price','profile','category','stock','description']; 
}
