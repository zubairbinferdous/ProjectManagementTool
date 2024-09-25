<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\select;

class employeesController extends Controller
{
    public  function viewProjectByManager($id)
    {
        $ViewProjectData = Project::where('id', $id)->first();
        $projectId = Project::where('id', $id)->pluck('id');
        $EmployeeData  = Employee::where('project_id', $projectId)->get();
        return view('user.viewProjectManger', compact('ViewProjectData', 'EmployeeData'));
    }

    public function getSingleData()
    {
        $user_id = Auth::user()->id;
        $ProjectData = Project::where('role', $user_id)->get();
        return view('user.allProjectDataByManager', compact('ProjectData'));
    }

    public function getSingleDataEmployee()
    {
        $user_id = Auth::user()->id;
        // dd($user_id);
        $getDataProjectIds = Project::where('role', $user_id)->pluck('id');
        $getDataEmployee = Employee::where('project_id', $getDataProjectIds)->get();
        // dd($getDataEmployee);
        return view('user.allEmployeeDataByManager', compact('getDataEmployee'));
    }

    public function viewEmployeeByManager($id)
    {
        $ViewEmployeeData = Employee::where('id', $id)->first();
        $existingRecords = Balance::where('employees_id', $id)->select('month', 'year')->get();

        return view('user.viewEmployeeManager', compact('ViewEmployeeData', 'existingRecords'));
    }
}
