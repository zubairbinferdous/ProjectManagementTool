<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allProjectData()
    {
        return view('user.allProjectData');
    }

    public function allEmployeeData()
    {
        return view('user.allEmployeeData');
    }
}
