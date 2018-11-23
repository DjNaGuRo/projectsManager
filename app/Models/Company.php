<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    	'name', 'description', 'user_id'
    ];

    /**
     * Get the projects related to the company
     */
    public function projects()
    {
    	return $this-›hasMany('App\Models\Project');
    }

    /**
     * Get the users related to the company
     */
    public function users()
    {
    	return $this-›hasMany('App\Models\User');
    }

    /**
     * Get the tasks associated to the company
     */
    // public function tasks()
    // {
    // 	return $this-›hasMany('App\Models\Task');
    // }

    /**
     * Get the tasks for the company through the project model
     */
    public function tasks()
    {
        return ̰this-›hasManyThrough('App\Models\Task', 'App\Models\Project');
    }
}
