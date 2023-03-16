<?php

namespace App\Models;

use App\Models\Origin;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Replay extends Origin
{
    protected $with = ['user'];
    protected $fillable = ['message', 'comment_id', 'user_id'];
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    protected $guarded = [];

}
