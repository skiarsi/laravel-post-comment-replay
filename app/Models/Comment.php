<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','post_id','comment','like'
    ];

    // relation with Posts
    public function post() : BelongsTo {
        return $this->belongsTo(Post::class);
    }

    // relation with replays
    public function replays() : HasMany{
        return $this->hasMany(Replay::class);
    }

    // relation with users
    public function user() : HasOne {
        return $this->hasOne(User::class,'id','user_id');
    }
}
