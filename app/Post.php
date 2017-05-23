<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
    	return $this->hasMany(PostComment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
