<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function teachers()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function students()
    {
        return $this->belongsTo('App\Student');
    }

    public function evaluatedTasks()
    {
        return $this->hasMany('App\EvaluatedTask');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function student()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function evaluatedTask()
    {
        return $this->hasMany('App\EvaluatedTask');
    }


    public function roles()
    {
        return $this->belongsToMany('Caffeinated\Shinobi\Models\Role', 'role_user');
    }
/*
    public function teacher() {
        return $this->belongsTo('App\Teacher');
    }
*/
}
