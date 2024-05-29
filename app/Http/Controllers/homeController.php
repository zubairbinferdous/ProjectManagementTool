<?php

namespace App\Http\Controllers;


use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class homeController extends Controller
{
    // project-area 
    public function addProject()
    {
        $EmployeeData =  Employee::latest()->get();
        return view("addProject.addProject", compact('EmployeeData'));
    }

    public function addProjectData(Request $request)
    {
        $addUserJson = json_encode($request->AddUser);
        // dd($request->all()); 
        Project::insertGetId([
            'ProjectName' =>  strtoupper($request->ProjectName),
            'ProjectDescription' => $request->ProjectDescription,
            'ProjectDivisions' => strtoupper($request->ProjectDivisions),
            'ProjectDistricts' =>  strtoupper($request->ProjectDistricts),
            'ProjectUpazilas' => strtoupper($request->ProjectUpazilas),
            'TotalCapacity' => $request->TotalCapacity,
            'CurrentWorking' => $request->CurrentWorking,
            'AddUser' => $addUserJson
        ]);
        toastr()->success('successfully project submit');
        return redirect()->back();
    }


    public function allProject()
    {

        $project =  Project::latest()->get();
        return view('addProject.allProject', compact('project'));
    }

    public function getProjectData($id)
    {

        Project::findOrFail($id)->delete();
        toastr()->warning('successfully delete project ');
        return redirect()->back();
    }


    public function getSingleProject($id)
    {
        $singleProject = Project::where("id", $id)->first();
        return  $singleProject;
    }



    // employee area  
    public function addEmployees()
    {
        return view("addEmployees.addEmployees");
    }

    public function addEmployeeData(Request $request)
    {
        // $addUserJson = json_encode($request->AddUser);
        // dd($request->all()); 

        if ($request->hasFile('profilePic')) {
            $manager = new ImageManager(new Driver());
            $profilePic = $request->file('profilePic');
            $name_gen = hexdec(uniqid()) . '.' . $profilePic->getClientOriginalExtension();
            $img = $manager->read($profilePic);
            $img =  $img->resize(200, 200);
            $img->toJpeg(80)->save('upload/project/' . $name_gen);
            $saveUrl = 'upload/project/' . $name_gen;


            Employee::insertGetId([
                'EmployeeName' => strtoupper($request->EmployeeName),
                'FatherName' => strtoupper($request->FatherName),
                'DateOfBirth' => $request->DateOfBirth,
                'BirthPlace' => strtoupper($request->BirthPlace),
                'PhoneNumber' => $request->PhoneNumber,
                'JoiningDate' => $request->JoiningDate,
                'NidNumber' => $request->NidNumber,
                'Designation' => strtoupper($request->Designation),
                'Salary' => $request->Salary,
                'profilePic' => $saveUrl,
                'Divisions' => strtoupper($request->Divisions),
                'Districts' => strtoupper($request->Districts),
                'Upazilas' => strtoupper($request->Upazilas),
            ]);
            toastr()->success('successfully employee submit');
            return redirect()->back();
        } else {
            // Handle the error - file not uploaded
            return response()->json(['error' => 'No file uploaded in this from'], 400);
        }
    }

    public function allEmployeeData()
    {
        $Employee =  Employee::latest()->get();
        return view('addEmployees.allEmployees', compact('Employee'));
    }

    public function getEmployeeData($id)
    {
        Employee::findOrFail($id)->delete();
        toastr()->warning('successfully delete employees ');
        return redirect()->back();
    }
}
