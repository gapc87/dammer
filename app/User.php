<?php

namespace App;

use App\Model\EvaluatedTask;
use App\Models\Student;
use App\Models\Teacher;
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
        return $this->hasOne(Teacher::class);
    }

    public function students()
    {
        return $this->hasOne(Student::class);
    }

    public function evaluatedTasks()
    {
        return $this->hasMany(EvaluatedTask::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function student()
    {
        return $this->hasOne(Teacher::class);
    }

    public function evaluatedTask()
    {
        return $this->hasMany(EvaluatedTask::class);
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
