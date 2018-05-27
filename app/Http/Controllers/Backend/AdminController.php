<?php

namespace App\Http\Controllers\Backend;

use App\Models\Course;
use App\Models\Group;
use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\Module;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        $levels = Level::all();
        $groups = Group::all();
        $users = User::all();
        $students = Student::all();
        $modules = Module::all();

        //dd($modules[0]->teachers());

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
