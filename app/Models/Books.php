<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function basket(){

        return $this->hasMany(Basket::class);
    }
    public function borrow(){

        return $this->hasMany(borrow::class);
    }



}
