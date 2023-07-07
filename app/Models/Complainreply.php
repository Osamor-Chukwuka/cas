<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complainreply extends Model
{
    use HasFactory;

    protected $fillable = ['message_id', 'reply'];
    protected $table = 'complainreply';

    public function complains()
    {
        return $this->belongsTo(Complain::class);
    }
}
