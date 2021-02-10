<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;



    public function books(){

        return $this->belongsTo(Books::class);
    }
    public function user(){

        return $this->belongsTo(User::class);
    }
}
