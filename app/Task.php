<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    public function evaluatedTask()
    {
        return $this->hasOne('App\EvaluatedTask');
    }
}
