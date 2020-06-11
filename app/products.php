<?php

namespace App;

use App\user;
use App\categories;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $primaryKey = 'product_id';
    public $table = "products";
    protected $fillable = ['name','price','profile','category','stock','description']; 


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {     
        return $this->belongsTo(categories::class);
    }
}
