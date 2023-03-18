<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\User;
use App\Models\Replay;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $with = ['user', 'comments'];
    protected $fillable = ['title', 'description', 'image' , 'user_id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $guarded = [];

}
