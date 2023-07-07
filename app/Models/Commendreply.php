<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commendreply extends Model
{
    use HasFactory;

    protected $fillable = ['message_id', 'reply'];
    protected $table = 'commendreply';

    public function commends(){
        return $this->belongsTo(Commend::class);
    }
}
