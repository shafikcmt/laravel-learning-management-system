<?php
use App\Http\Livewire\Home;
use App\Http\Livewire\Studentlogin;
use App\Http\Livewire\DriveSkills;
use App\Http\Livewire\StudentDetails;

// *********************************************************

use App\Http\Livewire\Sturesetpass;
use App\Http\Livewire\AllStudent;
use App\Http\Livewire\AddStudents;
use App\Http\Livewire\Resetpassword;
use App\Http\Livewire\Adminlogin;
use App\Http\Livewire\AddCategory;
use App\Http\Livewire\AddBatch;
use App\Http\Livewire\AddCourses;
use App\Http\Livewire\QuestionsTopic;
use App\Http\Livewire\AddQuestion;
use App\Http\Livewire\QuestionsBank;
use App\Http\Livewire\QuestionBulkImport;
use App\Http\Livewire\CourseMapping;
use App\Http\Livewire\ResultsQuizWise;
use App\Http\Livewire\ResultsBatchWise;
use App\Http\Livewire\ResultsDateWise;
use App\Http\Livewire\CheckPassword;
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
Route::get('/drive-skills',DriveSkills::class);
Route::get('/student-details',StudentDetails::class);

// **************************************************************************
// Admin
Route::get('/admin',Adminlogin::class);
Route::get('/reset-password',Resetpassword::class);
Route::get('/admin-dashboard',AdminDashboard::class);
Route::get('/all-student',AllStudent::class);
Route::get('/add-students',AddStudents::class);
Route::get('/add-category',AddCategory::class);
Route::get('/add-batch',AddBatch::class);
Route::get('/course-mapping',CourseMapping::class);
Route::get('/add-courses',AddCourses::class);
Route::get('/questions-topic',QuestionsTopic::class);
Route::get('/add-question',AddQuestion::class);
Route::get('/questions-bank',QuestionsBank::class);
Route::get('/question-bulk-import',QuestionBulkImport::class);
Route::get('/results-quiz-wise',ResultsQuizWise::class);
Route::get('/results-batch-wise',ResultsBatchWise::class);
Route::get('/results-date-wise',ResultsDateWise::class);
Route::get('/check-password',CheckPassword::class);

