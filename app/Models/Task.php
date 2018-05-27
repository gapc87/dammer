<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function evaluatedTask()
    {
        return $this->hasOne(EvaluatedTask::class);
    }
}
