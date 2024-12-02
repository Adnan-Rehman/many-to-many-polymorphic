<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps =false;
    protected $guarded = [];

    public function posts(){
        return $this->morphByMany(Post::class,'taggable');
    }
    public function videos(){
        return $this->morphByMany(Video::class,'taggable');
    }
}
