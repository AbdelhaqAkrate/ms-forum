<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Replay;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $with = ["user", "replays"];

    public $fillable =["message", "post_id", "user_id"];
    public function replays(){
        return $this->hasMany(Replay::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $guarded = [];
}
