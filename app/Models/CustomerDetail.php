<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    use HasFactory;

    // relasi data
    public function product()
    {
        return $this->belongsTo('App\Product','product_id', 'id');
    }

    // relasi data
    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id', 'id');
    }

}
