<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Designation;
use App\Models\DesignationRoll;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Employee;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Descriptor\Descriptor;

class homeController extends Controller
{
    // project-area 
    public function addProject()
    {

        $Designation =  Designation::latest()->get();
        return view("addProject.addProject", compact('Designation'));
    }

    public function addProjectData(Request $request)
    {
        // $addUserJson = json_encode($request->AddUser);
        // dd($request->all());
        $project = Project::create([
            'ProjectName' =>  strtoupper($request->ProjectName),
            'ProjectDirector' =>  strtoupper($request->DirectorName),
            'StaffName' =>  strtoupper($request->Supportstaff),
            'StaffNumber' =>  strtoupper($request->Supportnumber),
            'ProjectNumber' => $request->DirectorNumber,
            'ProjectValue' => $request->ProjectValue,
            'ProjectStart' =>  $request->ProjectStart,
            'role' =>  $request->role,
            'ProjectDescription' => $request->ProjectDescription,
            'ProjectDivisions' => strtoupper($request->ProjectDivisions),
            'ProjectDistricts' =>  strtoupper($request->ProjectDistricts),
            'ProjectUpazilas' => strtoupper($request->ProjectUpazilas),
            'TotalCapacity' => $request->TotalCapacity,
            'status' => $request->Status,
            'CurrentWorking' => $request->CurrentWorking,
        ]);


        $ProjectDescription = $request->DescriptionRoll;

        for ($i = 0; $i < count($ProjectDescription); $i++) {
            DesignationRoll::create([
                'project_id' => $project->id,
                'designation_roll_set' => $request->DescriptionRoll[$i],
                'member' => $request->AssignMember[$i],
            ]);
        }


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
        $singleProject = Project::with('designation')->where("id", $id)->first();
        // $DesignationRoll = DesignationRoll::where('project_id', $id)->get();
        return  $singleProject;
    }



    // employee area  
    public function addEmployees()
    {
        $project =  Project::latest()->get();
        $Designation =  Designation::latest()->get();
        return view("addEmployees.addEmployees", compact('project', 'Designation'));
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

            $pdfFile = $request->file('EmployeePdfOne');
            $name_gen = hexdec(uniqid()) . '.' . $pdfFile->getClientOriginalExtension();
            $savePath = 'upload/project/' . $name_gen;
            $pdfFile->move(public_path('upload/project'), $name_gen);


            $pdfFile = $request->file('EmployeePdfTwo');
            $name_gen = hexdec(uniqid()) . '.' . $pdfFile->getClientOriginalExtension();
            $savePathTwo = 'upload/project/' . $name_gen;
            $pdfFile->move(public_path('upload/project'), $name_gen);


            $pdfFile = $request->file('EmployeePdfThree');
            $name_gen = hexdec(uniqid()) . '.' . $pdfFile->getClientOriginalExtension();
            $savePathThree = 'upload/project/' . $name_gen;
            $pdfFile->move(public_path('upload/project'), $name_gen);



            Employee::insertGetId([
                'EmployeeName' => strtoupper($request->EmployeeName),
                'project_id' => $request->projectName,
                'FatherName' => strtoupper($request->FatherName),
                'DateOfBirth' => $request->DateOfBirth,
                'ActualJoinedDate' => $request->ActualJoinedDate,
                'BirthPlace' => strtoupper($request->BirthPlace),
                'PhoneNumber' => $request->PhoneNumber,
                'JoiningDate' => $request->JoiningDate,
                'NidNumber' => $request->NidNumber,
                'Designation' => strtoupper($request->Designation),
                'Salary' => $request->Salary,
                'profilePic' => $saveUrl,
                'Pdf_one' => $savePath,
                'Pdf_two' => $savePathTwo,
                'Pdf_three' => $savePathThree,
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

    public function getSingleEmployee($id)
    {
        $getEmployees = Employee::with('projectData')->where('id', $id)->first();
        return $getEmployees;
    }

    // designation 

    public function designation()
    {
        return view('designation.addDesignation');
    }

    public function designationData(Request $request)
    {
        // dd($request->all());

        Designation::insertGetId([
            'designations' => strtoupper($request->designations)
        ]);

        toastr()->success('successfully designations submit');
        return redirect()->back();
    }

    public function allDesignation()
    {
        $Designation =  Designation::latest()->get();
        return view('designation.allDesignation', compact('Designation'));
    }

    // user data 

    public function registerData()
    {
        return view('addUser.adduser');
    }

    public function registerUserData(Request $request)
    {
        // dd($request->all()); 

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        toastr()->success('successfully user submit');
        return redirect()->back();
    }

    public function alluser()
    {
        $user =  User::latest()->get();
        return view('addUser.alluser', compact('user'));
    }


    // salary add data 

    function salaryDataInset(Request $request)
    {

        $existingRecord = Balance::where('employees_id', $request->employee_id)
            ->where('month', $request->month)
            ->where('year', $request->year)
            ->first();

        if ($existingRecord) {
            toastr()->error('Salary for this month and year has already been submitted');
            return redirect()->back();
        }

        Balance::insertGetId([
            'employees_id' => $request->employee_id,
            'actualSalary' => $request->ActualSalaryProvide,
            'month' => $request->month,
            'year' => $request->year,
            'status' => "paid",
        ]);
        toastr()->success('successfully salary submit');
        return redirect()->back();
    }

    // balance  data 

    function balanceDataShow()
    {

        $year = Balance::select('year')->distinct()->orderBy('year', 'desc')->get();
        return view('balance', compact('year'));
    }


    function balanceList(Request $request)
    {
        $existingRecord = Balance::with('employeeData')->where('month', $request->month)
            ->where('year', $request->year)
            ->get();

        $totalSalary = $existingRecord->sum('actualSalary');

        return view('balanceList', compact('existingRecord', 'totalSalary'));
    }
}
