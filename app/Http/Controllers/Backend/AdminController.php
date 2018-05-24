<?php

namespace App\Http\Controllers\Backend;

use App\Course;
use App\Group;
use App\Http\Controllers\Controller;
use App\Level;
use App\Module;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('admin.dashboard', compact('courses'));
    }

    public function modules(Level $level)
    {
        $modules = $level->module()->getModels();

        $group = $level->group()->getModel();

        return view('admin.modules.index', compact('modules', 'level', 'group'));
    }

    public function getCourse(Course $course)
    {
        return view('admin.course.view', compact('course'));
    }

    public function roles(Request $request)
    {
        // $user = User::find(1);
        $users = User::all();

        return view('welcome')->with(['users' => $users]);
    }

    public function users(Request $request)
    {

    }

    public function group(Group $group)
    {
        $course = Course::find($group->level->course_id);

        return view('admin.group.index', ['course' => $course, 'group' => $group]);
    }


}
