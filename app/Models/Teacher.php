<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function group()
    {
        return $this->hasMany(Group::class);
    }

    /*
    public function groups()
    {
        return $this->hasMany(Group');
    }

    public function modules() {
        return $this->belongsToMany(Module');
    }

    public function user() {
        return $this->hasOne(User');
    }*/
}
