<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(Request $request)
    {

        return view('admin.dashboard');
    }

    public function getRoles(Request $request)
    {
        // $user = User::find(1);
        $users = User::all();

        return view('welcome')->with(['users' => $users]);
    }
}
