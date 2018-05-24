<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    public function levels()
    {
        return $this->belongsTo('App\Level');
    }

    public function teachers()
    {
        return $this->hasMany('App\Teacher');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function tutor()
    {
        return $this->hasOne('App\Teacher')->where('tutor', '=', true);
    }

    /*
    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function students()
    {
        return $this->hasManyThrough(
            'App\User',
            'App\Student',
            'group_id', // Foreign key on Teacher table...
            'id', // Foreign key on Users table...
            'id', // Local key on Groups table...
            'user_id' // Local key on Users table...
        );
    }

    public function teachers()
    {
        return $this->hasManyThrough(
            'App\User',
            'App\Teacher',
            'group_id', // Foreign key on Teacher table...
            'id', // Foreign key on Users table...
            'id', // Local key on Groups table...
            'user_id' // Local key on users table...
        );

    }

    public function tutor()
    {
        return $this->teachers()->where('teachers.tutor', '=', 1);
    }

    public function modules() {
        return $this->hasMany('App\Module');
    }
*/
}
