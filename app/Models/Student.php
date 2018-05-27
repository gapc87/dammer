<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

//    public static function users()
//    {
//        $users = \DB::table('users')
//                    ->join('students', 'users.id', '=', 'students.user_id')
//                    ->paginate();
//
//        return $users;
//    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function group()
    {
        return $this->belongsTo(Group::class)->with('level');
    }
}
