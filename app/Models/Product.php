<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // relasi data
    public function customer_detail()
    {
        return $this->hasMany('App\CustomerDetail','product_id', 'id');
    }

    public $timestamps = false;
    protected $fillable = ['name', 'photo', 'price', 'stock', 'description'];

}
