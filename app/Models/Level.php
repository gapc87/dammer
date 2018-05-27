<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    // Para el Admin
    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    // Para el resto de usuarios
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function group()
    {
        return $this->hasMany(Group::class);
    }




/*
    public function groups()
    {
        return $this->hasMany('App\Group')->with('teachers', 'students');
    }

    public function module() {
        return $this->belongsToMany('App\Module');
    }

    public function course() {
        return $this->belongsTo('App\Course');
    }

    public function group() {
        return $this->hasOne('App\Group');
    }

*/
}
