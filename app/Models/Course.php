<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public function levels()
    {
        return $this->hasMany(Level::class);
    }

    public function level()
    {
        return $this->hasOne(Level::class);
    }

/*
    public function levels()
    {
        return $this->hasMany('App\Level')->with('groups');
    }

    public function level() {
        return $this->hasOne('App\Level');
    }

*/


}
