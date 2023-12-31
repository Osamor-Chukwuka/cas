<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'cafetaria_id', 'message'];
    protected $table = 'complain';

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function cafetarias(){
        return $this->belongsTo(Cafetaria::class);
    }

    public function complainreplys(){
        return $this->hasMany(Complainreply::class);
    }
}
