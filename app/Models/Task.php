<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'hours', 'project_id', 'user_id', 'company_id', 'days'];

    public function comments($value='')
    {
    	return $this->morphMany('App\Models\Comment');
    }

    /**
     * Get the users associated to the task
     */
    public function users()
    {
    	return $this->belongsToMany('App\Models\User');
    }


    /**
      * Get the company that owns the task
      */
    // public function company()
    // {
    //     return ̰this-belongsTo('App\Models\Company');
    // }
}
