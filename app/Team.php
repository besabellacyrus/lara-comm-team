<?php

namespace App;

class Team extends Model
{
	public function users()
	{
		return $this->belongsToMany(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function addComment(Comment $comment)
	{
		$this->comments()->save($comment);
	}
}
