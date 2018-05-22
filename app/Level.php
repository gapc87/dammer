<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    public function groups()
    {
        return $this->hasMany('App\Group')->with('teachers', 'students');
    }


}
