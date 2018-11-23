<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the projects associated to the user
     */
    public function projects()
    {
        return $this-belongsToMany('App\Models\Project');
    }

    /**
     * Get the tasks associated to the user
     */
    public function tasks()
    {
        return $this-belongsToMany('App\Models\Task');
    }

    /**
     * Get the roles associated to the user
     */
    public function role()
    {
        return $this-belongsTo('App\Models\Role');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
