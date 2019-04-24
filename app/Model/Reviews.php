<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Products;
class Reviews extends Model
{
    public function products(){

        return $this->belongsTo(Products::class);
    }
}
