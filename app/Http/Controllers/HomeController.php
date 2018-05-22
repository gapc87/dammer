<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return $this
     */
    public function index(Request $request)
    {

        return view('home');
    }


    /**
     * @param Request $request
     * @return array
     */
    private function getRoles(Request $request)
    {
        $roles = array();

        foreach ($request->user()->roles as $key => $role)
        {
            $roles[$key] = $role->role;
        }

        return $roles;
    }


}
