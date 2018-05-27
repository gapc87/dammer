<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class EvaluatedTask extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
