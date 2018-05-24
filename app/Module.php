<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    public function levels()
    {
        return $this->belongsToMany('App\Level');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher');
    }

    /*
    public function level() {
        return $this->belongsToMany('App\Level');
    }

    public function teachers() {
        return $this->belongsToMany('App\Teacher');
    }

    public function group() {
        return $this->belongsTo('App\Group');
    }*/
}
