<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function level()
    {
        return $this->belongsTo('App\Level');
    }
}
