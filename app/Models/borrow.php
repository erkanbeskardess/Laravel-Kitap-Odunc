<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class borrow extends Model
{
    use HasFactory;

    public function Users(){

        return $this->belongsTo(User::class);
    }
    public function Books(){

        return $this->belongsTo(Books::class);
    }
    public function setting(){

        return $this->hasMany(Setting::class);
    }
}
