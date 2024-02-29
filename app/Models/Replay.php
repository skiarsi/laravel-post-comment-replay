<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Replay extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','comment_id','replay_to','replay','like'
    ];


    // relation with comments
    public function comments() : BelongsTo {
        return $this->belongsTo(Comment::class);
    }

    // relation with users
    public function user() : HasOne {
        return $this->hasOne(User::class,'id','user_id');
    }
}
