<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
        'name','detail','price','stock','discounr'
    ];

    public function reviews(){
        return $this->hasMany(\App\Models\Review::class);
    }
}
