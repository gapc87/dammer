<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function tasks()
    {
        return $this->belongsToMany('App\Task');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }

    public function modules()
    {
        return $this->belongsToMany('App\Module');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function task()
    {
        return $this->hasMany('App\Task');
    }

    public function group()
    {
        return $this->hasMany('App\Group');
    }

    /*
    public function groups()
    {
        return $this->hasMany('App\Group');
    }

    public function modules() {
        return $this->belongsToMany('App\Module');
    }

    public function user() {
        return $this->hasOne('App\User');
    }*/
}
