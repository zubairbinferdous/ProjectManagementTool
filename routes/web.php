<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\PDF;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// this is test file 
// Route::get('/test', function () {
//     return view("test");
// });

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/pdf', function () {
    return view('balancePdf');
});
Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/pdfGenaretor', function () {
//     $pdf = PDF::loadView('balancePdf');
//     return $pdf->stream('user.pdf');
// })->name('pdfGenaretor');



// this is a admin area only admin can see this  

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


//  product area 
Route::get('/addProject', [homeController::class, "addProject"])->name('addProject');
Route::post('/addProjectData', [homeController::class, "addProjectData"])->name('addProjectData');
Route::get('/allProjectArea', [homeController::class, 'allProject'])->name('allProject');
Route::get('/getProjectData{id}', [homeController::class, 'getProjectData'])->name('getProjectData');
Route::get('/getSingleProject{id}', [homeController::class, 'getSingleProject'])->name('getSingleProject');


// employee area
Route::get('/addEmployees', [homeController::class, "addEmployees"])->name('addEmployees');
Route::post('/addEmployeeData', [homeController::class, "addEmployeeData"])->name('addEmployeeData');
Route::get('/allEmployeeData', [homeController::class, 'allEmployeeData'])->name('allEmployeeData');
Route::get('/getEmployeeData{id}', [homeController::class, 'getEmployeeData'])->name('getEmployeeData');
Route::get('/getSingleEmployee{id}', [homeController::class, 'getSingleEmployee'])->name('getSingleEmployee');

// designation 
Route::get('/addDesignation', [homeController::class, 'designation'])->name('addDesignation');
Route::get('/allDesignation', [homeController::class, 'allDesignation'])->name('allDesignation');
Route::post('/addDesignationData', [homeController::class, 'designationData'])->name('addDesignationData');

// add user 

Route::get('/addUserRegister', [homeController::class, 'registerData'])->name('registerData');
Route::post('/registerUserData', [homeController::class, 'registerUserData'])->name('registerUserData');
Route::get('/allUserArea', [homeController::class, 'alluser'])->name('allUserArea');

//add salary  
Route::post('/balance', [homeController::class, 'salaryDataInset'])->name('balance_data');

// balance data

Route::get('/getBalanceInfo', [homeController::class, 'balanceDataShow'])->name('balance');
Route::get('/balanceList', [homeController::class, 'balanceList'])->name('balanceList');
Route::post('/balanceDecrease', [homeController::class, 'balanceDecrease'])->name('deduct.selected');


// user data form website 

Route::group(['middleware' => ['auth', 'role:manager']], function () {

    Route::get('/viewProjectDataByManager', [employeesController::class, 'getSingleData'])->name('viewProjectDataByManager');
    Route::get('/viewProjectByManager/{id}', [employeesController::class, 'viewProjectByManager'])->name('viewProjectByManager');


    Route::get('/viewEmployeeDataByManager', [employeesController::class, 'getSingleDataEmployee'])->name('viewEmployeeDataBy');
    Route::get('/viewEmployeeByManager/{id}', [employeesController::class, 'viewEmployeeByManager'])->name('viewEmployeeByManager');
});



// single data 

Route::group(['middleware' => ['auth', 'role:admin']], function () {

    Route::get('/allProjectData', [UserController::class, 'allProjectData'])->name('allProjectData');
    Route::get('/viewProjectData/{id}', [UserController::class, 'viewProjectData'])->name('viewProjectData');

    Route::get('/allEmployee', [UserController::class, 'allEmployeeData'])->name('allEmployee');
    Route::get('/viewEmployee/{id}', [UserController::class, 'viewEmployee'])->name('viewEmployee');
});






//add salary  
Route::post('/balance', [homeController::class, 'salaryDataInset'])->name('balance_data');

// balance data

Route::get('/getBalanceInfo', [homeController::class, 'balanceDataShow'])->name('balance');
Route::get('/balanceList', [homeController::class, 'balanceList'])->name('balanceList');
Route::post('/balanceDecrease', [homeController::class, 'balanceDecrease'])->name('deduct.selected');



//employee area 

















require __DIR__ . '/auth.php';
