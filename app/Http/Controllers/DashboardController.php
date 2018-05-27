<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use App\Models\Student;
use App\Models\Teacher;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->isRole('Admin'))
        {
            return view('admin.dashboard', $this->resume());
        }

        return view('dashboard');
    }

    public function store(Request $request)
    {
        $message = Message::create($request->all());

        return redirect()->route('admin.dashboard')
            ->with('info', 'Broadcast enviado con éxito');
    }


    private function resume()
    {
        $courses = Course::all()->count();
        $groups = Group::all()->count();
        $teachers = Teacher::all()->count();
        $students = Student::all()->count();

        return compact('courses', 'groups', 'teachers', 'students');
    }
}
