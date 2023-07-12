<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillable = [
        'question1', 'question2', 'question3', 'question4', 'question5', 'question6', 'question8',
        'question9',  'question10', 'question11', 'question12', 'question13', 'question14',
        'question15', 'question16', 'food_quality', 'physical_environment', 'customer_service', 'pricing',
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
