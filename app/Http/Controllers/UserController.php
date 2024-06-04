<?php

namespace App\Http\Controllers;

use App\Models\DesignationRoll;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allProjectData()
    {
        $ProjectData = Project::with('designation')->latest()->get();
        return view('user.allProjectData', compact('ProjectData'));
    }

    public function viewProjectData($id)
    {
        $ViewProjectData = Project::with('designation')->where('id', $id)->first();
        $EmployeeData = Employee::where('project_id', $id)->get();
        return view('user.viewProject', compact('ViewProjectData', 'EmployeeData'));
    }


    // employee-area 

    public function allEmployeeData()
    {
        $EmployeeData = Employee::with('projectData')->get();
        return view('user.allEmployeeData', compact('EmployeeData'));
    }

    public function viewEmployee($id)
    {
        $ViewEmployeeData = Employee::with('projectData')->where('id', $id)->first();
        return view('user.viewEmployee', compact('ViewEmployeeData'));
    }
}
