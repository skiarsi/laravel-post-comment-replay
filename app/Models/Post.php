<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','slug','title','describ','text','like'
    ];


    // relation with User
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }


    // relation with comments
    public function comments() : HasMany {
        return $this->hasMany(Comment::class);
    }


}
