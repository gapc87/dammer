<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function groups()
    {
        return $this->hasMany('App\Group');
    }

    public function modules() {
        return $this->belongsToMany('App\Module');
    }

    public function user() {
        return $this->hasOne('App\User');
    }
}
