<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public function levels()
    {
        return $this->hasMany('App\Level')->with('groups');
    }

    public function level() {
        return $this->hasOne('App\Level');
    }




}
