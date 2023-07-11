<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillable = [
        'question1', 'question2', 'question3', 'question4', 'question5', 'question6', 'question7',
        'total', 'cafetaria_id', 'user_id'
    ];
    protected $table = 'rate';

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function cafetarias(){
        return $this->belongsTo(Cafetaria::class);
    }
}
