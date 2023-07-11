<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // relasi data
    public function user()
    {
        return $this->belongsTo('App\User','user_id', 'id');
    }

    // relasi data
    public function customer_detail()
    {
        return $this->hasMany('App\CustomerDetail','customer_id', 'id');
    }

    public $timestamps = false;
    protected $fillable = ['user_id', 'date', 'status', 'total_price'];

}
