<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
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
