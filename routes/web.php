<?php
use App\Http\Livewire\Home;
// use App\Http\Livewire\Studentlogin;
use App\Http\Controllers\StudentAuth;
use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AllStudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AddCourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseMappingController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AddQuestionController;
use App\Http\Livewire\DriveSkills;
// use App\Http\Livewire\StudentDetails;
// use App\Http\Livewire\StudentRegistrations;


// *********************************************************

use App\Http\Livewire\Sturesetpass;
// use App\Http\Livewire\AllStudent;
// use App\Http\Livewire\AddStudents;
use App\Http\Livewire\Resetpassword;
use App\Http\Livewire\Adminlogin;
// use App\Http\Livewire\AddCategory;
// use App\Http\Livewire\AddBatch;
// use App\Http\Livewire\AddCourses;
// use App\Http\Livewire\QuestionsTopic;
// use App\Http\Livewire\AddQuestion;
// use App\Http\Livewire\QuestionsBank;
// use App\Http\Livewire\QuestionBulkImport;
// use App\Http\Livewire\CourseMapping;
use App\Http\Livewire\ResultsQuizWise;
use App\Http\Livewire\ResultsBatchWise;
use App\Http\Livewire\ResultsDateWise;
use App\Http\Livewire\CheckPassword;
use App\Http\Livewire\Admindashboard;
// use App\Http\Livewire\Studentdashboard;
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
// Student Controller
//------------------------------------
Route::get('/student-login',[StudentAuth::class,'login'])->middleware('studentlogin');
Route::get('/student-logout',[StudentAuth::class,'Logout']);
Route::get('/student-dashboard',[StudentAuth::class,'StudentDashboard'])->middleware('studentauthcheck');
Route::post('/student-login',[StudentAuth::class,'LoginStudent'])->name('student-login');
Route::get('/student-profile/{id}',[StudentAuth::class,'StudentProfile']);
Route::get('/student-registration',[StudentAuth::class,'registration'])->middleware('studentlogin');
Route::post('/student-registration',[StudentAuth::class,'StudentRegister'])->name('student-register');
Route::get('/password',[AllStudentController::class,'ShowPassword']);
// **************************************************************************
// Student Livewire class
//---------------------------------
Route::get('/drive-skills',DriveSkills::class);
// Route::get('/student-registration',StudentRegistrations::class);
Route::get('/',Home::class);
// Route::get('/student-login',Studentlogin::class);
Route::get('/reset-password-student',Sturesetpass::class);

//************************************************************************************ */
// Admin Controller
//---------------------------------

Route::get('/admin',[AdminAuth::class,'AdminLog']);
Route::get('/admin-logout',[AdminAuth::class,'AdminLogout']);


Route::get('/import-page',[AllStudentController::class,'index']);
Route::post('/import',[AllStudentController::class,'import'])->name('import');
Route::get('/edit-student/{id}',[AllStudentController::class,'EditStudent']);
Route::get('/student-delete/{id}',[AllStudentController::class,'studentDelete']);
Route::get('all-student',[AllStudentController::class,'allStudent']);
Route::get('/add-students',[AllStudentController::class,'addStudent']);
Route::post('/add-students',[AllStudentController::class,'createStudent'])->name('student-add');
Route::post('/student-update',[AllStudentController::class,'UpdateStudent'])->name('update');
Route::get('/import-demo',[AllStudentController::class,'demoDownload']);
Route::get('/export-excel',[AllStudentController::class,'ExportintoExcell']);
Route::get('/export-csv',[AllStudentController::class,'ExportintoCSV']);
Route::get('/export-pdf',[AllStudentController::class,'ExportintoPDF']);
Route::get('/all-studentspdf',[AllStudentController::class,'getStudentsPDF']);
// Route::post('/all-student',[AllStudentController::class,'studentSearch'])->name('search-student');

Route::get('/add-category',[CourseController::class,'addCategory']);
Route::post('/add-category',[CourseController::class,'createCategory'])->name('create-category');
Route::get('/edit-category/{id}',[CourseController::class,'editCategory']);
Route::post('/edit-category',[CourseController::class,'updateCategory'])->name('update-category');
Route::get('/category-delete/{id}',[CourseController::class,'categoryDelete']);


Route::get('/add-batch',[BatchController::class,'addBatch']);
Route::post('/create-batch',[BatchController::class,'createBatch'])->name('create-batch');
Route::get('/edit-batch/{id}',[BatchController::class,'editBatch']);
Route::post('/edit-batch',[BatchController::class,'updateBatch'])->name('update-batch');
Route::get('/batch-delete/{id}',[BatchController::class,'batchDelete']);

Route::get('/questions-topic',[QuestionsController::class,'addTopic']);
Route::post('/create-topic',[QuestionsController::class,'createTopic'])->name('create-topic');
Route::get('/edit-topic/{id}',[QuestionsController::class,'editTopic']);
Route::post('/edit-topic',[QuestionsController::class,'updateTopic'])->name('update-topic');
Route::get('/delete-topic/{id}',[QuestionsController::class,'deleteTopic']);
Route::get('/export-csv-question',[QuestionsController::class,'ExportintoCSV']);
Route::get('/export-excel-question',[QuestionsController::class,'ExportintoExcell']);
Route::get('/export-pdf',[QuestionsController::class,'ExportintoPDF']);
Route::get('/export-pdf-questions',[QuestionsController::class,'ExportintoPDF']);
Route::get('/all-questionpdf',[QuestionsController::class,'getQuestionsPDF']);


Route::get('/questions-category',[QuestionsController::class,'addCategory']);
Route::post('/questions-category',[QuestionsController::class,'createQcategory'])->name('create-qcategory');
Route::get('/edit-qcategory/{id}',[QuestionsController::class,'editQcategory']);
Route::post('/edit-qcategory',[QuestionsController::class,'updateQcategory'])->name('update-qcategory');
Route::get('/delete-qcategory/{id}',[QuestionsController::class,'deleteQcategory']);

Route::get('/add-question',[AddQuestionController::class,'addQuestion']);
Route::post('/add-question',[AddQuestionController::class,'createQuestion'])->name('create-question');

Route::get('/question-bulk-import',[AddQuestionController::class,'bulkQuestion']);
Route::get('/demo-download',[AddQuestionController::class,'demoQuestion']);
Route::post('/bulk-question',[AddQuestionController::class,'createBulkQuestion'])->name('bulk-question');

Route::get('/questions-bank',[AddQuestionController::class,'questionBank']);
Route::get('/edit-questions/{id}',[AddQuestionController::class,'questionBankEdit']);
Route::post('/edit-questions',[AddQuestionController::class,'updateQuestion'])->name('update-question');
Route::get('/delete-questions/{id}',[AddQuestionController::class,'deleteQuestion']);

Route::get('/course-details/{id}',[AddQuestionController::class,'courseDetails']);
Route::get('/view-topic/{id}',[AddQuestionController::class,'viewTopic']);
Route::get('/questions-view/{id}',[AddQuestionController::class,'questionsView']);

Route::get('/add-courses',[AddCourseController::class,'addCourse']);
Route::post('/add-courses',[AddCourseController::class,'CreateCourse'])->name('create-course');
Route::get('/edit-courses/{id}',[AddCourseController::class,'editCourse']);
Route::post('/edit-courses',[AddCourseController::class,'updateCourse'])->name('update-courses');
Route::get('/delete-courses/{id}',[AddCourseController::class,'deleteCourse']);

Route::get('/course-mapping',[CourseMappingController::class,'index']);
Route::get('/course-view/{id}',[CourseMappingController::class,'courseView']);
Route::get('/all-question/{id}',[CourseMappingController::class,'allQuestion']);
Route::get('test',[CourseMappingController::class,'Test']);

Route::post('/admin-login',[AdminAuth::class,'AdminLogin'])->name('admin-login');
Route::get('/admin-dashboard',[AdminAuth::class,'index']);


//********************************************************************************************* */

// Admin Livewire Class
//---------------------------------
Route::get('/reset-password',Resetpassword::class);
// Route::get('/admin-dashboard',Admindashboard::class);
// Route::get('/all-student',AllStudent::class);
// Route::get('/add-students',AddStudents::class);
// Route::get('/add-category',AddCategory::class);
// Route::get('/add-batch',AddBatch::class);
// Route::get('/course-mapping',CourseMapping::class);
// Route::get('/add-courses',AddCourses::class);
// Route::get('/questions-topic',QuestionsTopic::class);
// Route::get('/add-question',AddQuestion::class);
// Route::get('/questions-bank',QuestionsBank::class);
// Route::get('/question-bulk-import',QuestionBulkImport::class);
Route::get('/results-quiz-wise',ResultsQuizWise::class);
Route::get('/results-batch-wise',ResultsBatchWise::class);
Route::get('/results-date-wise',ResultsDateWise::class);
Route::get('/check-password',CheckPassword::class);

