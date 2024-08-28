<?php

namespace App\Http\Controllers;

use App\Models\DesignationRoll;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Balance;
use Illuminate\Support\Facades\DB;

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
        $roleCounts = Employee::select('Designation', DB::raw('count(*) as total'))
            ->where('project_id', $id)
            ->groupBy('Designation')
            ->get();
        return view('user.viewProject', compact('ViewProjectData', 'EmployeeData', 'roleCounts'));
    }


    // employee-area 

    public function allEmployeeData()
    {
        $EmployeeData = Employee::with('projectData')->get();
        return view('user.allEmployeeData', compact('EmployeeData'));
    }

    public function viewEmployee($id)
    {
        $existingRecords = Balance::where('employees_id', $id)->select('month', 'year')->get();
        $ViewEmployeeData = Employee::with('projectData')->where('id', $id)->first();
        return view('user.viewEmployee', compact('ViewEmployeeData', 'existingRecords'));
    }
}
