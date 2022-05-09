<?php
use App\Http\Livewire\Home;
use App\Http\Livewire\Studentlogin;
use App\Http\Livewire\Sturesetpass;
use App\Http\Livewire\AllStudent;
use App\Http\Livewire\AddStudents;
use App\Http\Livewire\Resetpassword;
use App\Http\Livewire\Adminlogin;
use App\Http\Livewire\Admindashboard;
use App\Http\Livewire\Studentdashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Student
Route::get('/',Home::class);
Route::get('/student-dashboard',Studentdashboard::class);
Route::get('/student-login',Studentlogin::class);
Route::get('/reset-password-student',Sturesetpass::class);

// Admin
Route::get('/admin',Adminlogin::class);
Route::get('/reset-password',Resetpassword::class);
Route::get('/admin-dashboard',AdminDashboard::class);
Route::get('/all-student',AllStudent::class);
Route::get('/add-students',AddStudents::class);

