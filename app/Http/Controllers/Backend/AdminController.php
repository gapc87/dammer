<?php

namespace App\Http\Controllers\Backend;

use App\Course;
use App\Group;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        $courses = Course::all();
        return view('admin.dashboard')->with('courses', $courses);
    }

    public function getRoles(Request $request)
    {
        // $user = User::find(1);
        $users = User::all();

        return view('welcome')->with(['users' => $users]);
    }

    public function group(Group $group)
    {
        $course = Course::find($group->level->course_id);

        return view('admin.group.index', ['course' => $course, 'group' => $group]);
    }
}
