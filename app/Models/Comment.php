<?php

namespace App\Models;

use App\Models\Origin;
use App\Models\Replay;
use Illuminate\Database\Eloquent\Model;

class Comment extends Origin
{
    protected $with = ["user", "replays"];
    public $fillable =["message", "post_id", "user_id"];
    public function replays(){
        return $this->hasMany(Repaly::class);
    }
    protected $guarded = [];
}
