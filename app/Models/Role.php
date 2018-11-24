<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get the users associated to the role
     */
    public function users()
    {
    	return $this->belongsToMany('App\Models\User');
    }
}
