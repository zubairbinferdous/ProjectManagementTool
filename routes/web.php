<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// this is test file 
// Route::get('/test', function () {
//     return view("test");
// });


// add product area 
Route::get('/addProduct', [homeController::class, "addProject"])->name('addProject');
Route::post('/addProjectData', [homeController::class, "addProjectData"])->name('addProjectData');
Route::get('/allProjectArea', [homeController::class, 'allProject'])->name('allProject');
Route::get('/getProjectData{id}', [homeController::class, 'getProjectData'])->name('getProjectData');
Route::get('/getSingleProject{id}', [homeController::class, 'getSingleProject'])->name('getSingleProject');


// add employee area
Route::get('/addEmployees', [homeController::class, "addEmployees"])->name('addEmployees');
Route::post('/addEmployeeData', [homeController::class, "addEmployeeData"])->name('addEmployeeData');
Route::get('/allEmployeeData', [homeController::class, 'allEmployeeData'])->name('allEmployeeData');
Route::get('/getEmployeeData{id}', [homeController::class, 'getEmployeeData'])->name('getEmployeeData');




require __DIR__ . '/auth.php';
