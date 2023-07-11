<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafetaria extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'cafetarias';


    public function commends(){
        return $this->hasMany(Commend::class);
    }

    public function complains(){
        return $this->hasMany(Complain::class);
    }

    public function rate(){
        return $this->hasMany(Rate::class);
    }
}


