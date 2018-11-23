<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
		'body', 'user_id', 'commentable_id', 'commentable_type', 'url'
	];

    /**
     * Get the user owner of the comment
     */
    public function user()
    {
        return ̰this-belongsTo('App\Models\User');
    }

    /**
     * Get all the owning commentable models.
     */
    public function commentable()
    {
    	return $this->morphTo();
    }
}
