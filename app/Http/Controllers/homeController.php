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
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Mpdf\MpdfException;
use Illuminate\Support\Facades\Log as FacadesLog;
use Illuminate\Support\Facades\Log;
use Mpdf\Mpdf;
use Illuminate\Support\Facades\View;



// use Mpdf\Mpdf;
// use Mpdf\MpdfException;
// use Illuminate\Http\Request;
// use App\Models\Balance;
// use Mpdf\Mpdf; 


class homeController extends Controller
{
    // project-area 
    public function addProject()
    {
        $Designation =  Designation::latest()->get();
        $User = User::latest()->get();
        return view("addProject.addProject", compact('Designation', 'User'));
    }

    public function addProjectData(Request $request)
    {
        // $addUserJson = json_encode($request->AddUser);
        // dd($request->all());
        // Add validation rules
        $request->validate([
            'ProjectName' => 'required|string|max:255',
            'DirectorName' => 'required|string|max:255',
            'Supportstaff' => 'required|string|max:255',
            'Supportnumber' => 'required|numeric',
            'DirectorNumber' => 'required|numeric',
            'ProjectValue' => 'required|numeric|min:0',
            'ProjectStart' => 'required|date',
            'role' => 'required|string|max:50',
            'ProjectDescription' => 'nullable|string',
            'ProjectDivisions' => 'required|string|max:255',
            'ProjectDistricts' => 'required|string|max:255',
            'ProjectUpazilas' => 'required|string|max:255',
            'TotalCapacity' => 'required|string',
            'Status' => 'required|string',
            'CurrentWorking' => 'required|string',
        ]);

        // Create the project after validation passes
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
        return view('addProject.editProject', compact('singleProject'));
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
        $request->validate([
            'EmployeeName' => 'required|string|max:255',
            'projectName' => 'required|integer|exists:projects,id',
            'FatherName' => 'required|string|max:255',
            'DateOfBirth' => 'required|date',
            'ActualJoinedDate' => 'required|date',
            'BirthPlace' => 'required|string|max:255',
            'PhoneNumber' => 'required|digits:11', // Assuming phone number is 11 digits
            'JoiningDate' => 'required|date',
            'NidNumber' => 'required|numeric|digits_between:10,17', // NID number between 10 and 17 digits
            'Designation' => 'required|string|max:255',
            'Salary' => 'required|numeric|min:0',
            'profilePic' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Image validation for profile picture
            'EmployeePdfOne' => 'required|mimes:pdf|max:2048', // PDF validation for PDF one
            'EmployeePdfTwo' => 'required|mimes:pdf|max:2048', // PDF validation for PDF two
            'EmployeePdfThree' => 'required|mimes:pdf|max:2048', // PDF validation for PDF three
            'Account' => 'required|string|max:255',
            'Divisions' => 'required|string|max:255',
            'Districts' => 'required|string|max:255',
            'Upazilas' => 'required|string|max:255',
        ]);
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
                'Account' => strtoupper($request->Account),
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
        $project =  Project::latest()->get();
        $Designation =  Designation::latest()->get();
        $getEmployees = Employee::with('projectData')->where('id', $id)->first();
        return view('addEmployees.editEmployees', compact('getEmployees', 'project', 'Designation'));
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

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'role' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
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
        if ($request->balance === 'balanceList') {
            $existingRecord = Balance::with('employeeData')
                ->where('month', $request->month)
                ->where('year', $request->year)
                ->get();

            $totalSalary = $existingRecord->sum('actualSalary');

            return view('balanceList', compact('existingRecord', 'totalSalary'));
        }


        if ($request->balance === 'balancePDF') {


            try {




                // Fetch the records for the given month and year
                $data = Balance::with('employeeData')
                    ->where('month', $request->month)
                    ->where('year', $request->year)
                    ->get();

                // Calculate the total salary
                $totalSalary = $data->sum('actualSalary');

                // $pdf = PDF::loadView('balancePdf', [
                //     'data' => $data,
                //     'img' => public_path('lkskCapture.PNG'),
                //     'totalSalary' => $totalSalary,
                // ]);
                // return $pdf->stream('user.pdf');

                $pdfData = [
                    'data' => $data,
                    'img' => public_path('lkskCapture.PNG'),
                    'totalSalary' => $totalSalary,
                ];

                $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
                $fontDirs = $defaultConfig['fontDir'];

                $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
                $fontData = $defaultFontConfig['fontdata'];

                $path = public_path('font');

                // dd($path);
                // $view = view('balancePdf', $pdfData)->render();

                $mpdf = new Mpdf([
                    'format' => 'A4',
                    'orientation' => 'P',
                    'fontDir' => array_merge($fontDirs, [$path]),
                    'fontdata' => $fontData + [
                        'solaimanlipi' => [
                            "R" => 'SolaimanLipi.ttf',
                            'useOTL' => 0xFF,
                        ],
                    ],
                    'default_font' => 'solaimanlipi'
                ]);
                $mpdf->WriteHTML(view('balancePdf', $pdfData));
                return $mpdf->Output('document.pdf', 'I');
            } catch (\Mpdf\MpdfException $e) {
                // Log the error for debugging//
                Log::error('PDF Generation Failed: ' . $e->getMessage());
                return response()->json(['error' => $e->getMessage()], 500);
            }
        }
    }


    function balanceDecrease(Request $request)
    {
        // Validate that 'employee_ids' is required and must be an array
        $request->validate([
            'employee_ids' => 'required|array|min:1',  // Ensure at least 1 employee is selected
        ]);

        // Check if the employee_ids array is empty (not needed anymore after adding min:1)
        if (empty($request->employee_ids)) {
            toastr()->success('No employees selected.');
            return redirect()->back();
        }

        // Proceed with deduction logic
        if ($request->deduction_type == "percentage") {
            DB::table('balances')
                ->whereIn('id', $request->employee_ids)
                ->update([
                    'actualSalary' => DB::raw('actualSalary - (actualSalary * 0.05)')
                ]);
            toastr()->success('Cut 5% Employees\' balance.');
        }

        if ($request->deduction_type == "fixed") {
            DB::table('balances')
                ->whereIn('id', $request->employee_ids)
                ->decrement('actualSalary', 5000);
            toastr()->success('5000 has been deducted from the selected employees\' balance.');
        }

        return redirect()->back();
    }
}
