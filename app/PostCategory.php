<?php

namespace App;

class PostCategory extends Model
{
    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
