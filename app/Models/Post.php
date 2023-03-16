<?php

namespace App\Models;

use App\Models\Origin;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Origin
{
    protected $with = ['user', 'comments'];
    protected $fillable = ['title', 'body', 'user_id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    protected $guarded = [];

}
