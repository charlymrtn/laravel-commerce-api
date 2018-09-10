<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

    protected $fillable = [
        'customer_name','star','review'
    ];

    public function product(){
        return $this->belongsTo(\App\Models\Product::class);
    }
}
