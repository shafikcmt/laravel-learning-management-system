<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentAuth;
use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AllStudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AddCourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseMappingController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AddQuestionController;
use App\Http\Controllers\QuizResultController;




// *********************************************************

use App\Http\Livewire\Sturesetpass;
use App\Http\Livewire\Resetpassword;
use App\Http\Livewire\Adminlogin;

use App\Http\Livewire\CheckPassword;
use App\Http\Livewire\Admindashboard;
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



Route::get('/',[HomeController::class,'index'])->middleware('ifStudentLogin');
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
Route::get('student-result',[CourseMappingController::class,'StudentResult']);
Route::get('/course-view/{id}',[CourseMappingController::class,'courseView']);
Route::get('/start-quiz/{id}',[CourseMappingController::class,'startQuiz']);
Route::get('/all-question/{id}',[CourseMappingController::class,'allQuestion']);
Route::post('/submit-answer',[CourseMappingController::class,'submitAnswer'])->name('submit-answer');


// **************************************************************************

Route::get('/reset-password-student',Sturesetpass::class);

//************************************************************************************ */
// Admin Controller
//---------------------------------

Route::get('/admin',[AdminAuth::class,'AdminLog']);
Route::get('/admin-logout',[AdminAuth::class,'AdminLogout']);


Route::get('/import-page',[AllStudentController::class,'index'])->middleware('adminauthcheck');
Route::post('/import',[AllStudentController::class,'import'])->name('import');
Route::get('/edit-student/{id}',[AllStudentController::class,'EditStudent'])->middleware('adminauthcheck');
Route::get('/student-delete/{id}',[AllStudentController::class,'studentDelete']);
Route::get('all-student',[AllStudentController::class,'allStudent'])->middleware('adminauthcheck');
Route::get('all-student/action',[AllStudentController::class,'action'])->name('all-student.action');

Route::get('/add-students',[AllStudentController::class,'addStudent'])->middleware('adminauthcheck');
Route::post('/add-students',[AllStudentController::class,'createStudent'])->name('student-add');
Route::post('/student-update',[AllStudentController::class,'UpdateStudent'])->name('update');
Route::get('/import-demo',[AllStudentController::class,'demoDownload']);
Route::get('/export-excel',[AllStudentController::class,'ExportintoExcell']);
Route::get('/export-csv',[AllStudentController::class,'ExportintoCSV']);
Route::get('/exportstudents',[AllStudentController::class,'getStudentsPDF']);
Route::get('/all-studentspdf',[AllStudentController::class,'ExportStudentintoPDF']);


Route::get('/add-category',[CourseController::class,'addCategory'])->middleware('adminauthcheck');
Route::post('/add-category',[CourseController::class,'createCategory'])->name('create-category');
Route::get('/edit-category/{id}',[CourseController::class,'editCategory'])->middleware('adminauthcheck');
Route::post('/edit-category',[CourseController::class,'updateCategory'])->name('update-category');
Route::get('/category-delete/{id}',[CourseController::class,'categoryDelete']);


Route::get('/add-batch',[BatchController::class,'addBatch'])->middleware('adminauthcheck');
Route::post('/create-batch',[BatchController::class,'createBatch'])->name('create-batch');
Route::get('/edit-batch/{id}',[BatchController::class,'editBatch'])->middleware('adminauthcheck');
Route::post('/edit-batch',[BatchController::class,'updateBatch'])->name('update-batch');
Route::get('/batch-delete/{id}',[BatchController::class,'batchDelete']);
Route::post('/add-batch',[BatchController::class,'studentsAddBatch'])->name('students-add-batch');
Route::post('/batch-add',[BatchController::class,'studentAddBatch'])->name('student-add-batch');
Route::get('/demo-batch-file',[BatchController::class,'demoBatchFile']);


Route::get('/questions-topic',[QuestionsController::class,'addTopic'])->middleware('adminauthcheck');
Route::post('/create-topic',[QuestionsController::class,'createTopic'])->name('create-topic');
Route::get('/edit-topic/{id}',[QuestionsController::class,'editTopic'])->middleware('adminauthcheck');
Route::post('/edit-topic',[QuestionsController::class,'updateTopic'])->name('update-topic');
Route::get('/delete-topic/{id}',[QuestionsController::class,'deleteTopic']);
Route::get('/export-csv-question',[QuestionsController::class,'ExportintoCSV'])->middleware('adminauthcheck');
Route::get('/export-excel-question',[QuestionsController::class,'ExportintoExcell']);
Route::get('/all-questionpdf',[QuestionsController::class,'getQuestionsPDF']);
Route::get('/export-pdf-questions',[QuestionsController::class,'ExportintoPDF']);



Route::get('/questions-category',[QuestionsController::class,'addCategory'])->middleware('adminauthcheck');
Route::post('/questions-category',[QuestionsController::class,'createQcategory'])->name('create-qcategory');
Route::get('/edit-qcategory/{id}',[QuestionsController::class,'editQcategory'])->middleware('adminauthcheck');
Route::post('/edit-qcategory',[QuestionsController::class,'updateQcategory'])->name('update-qcategory');
Route::get('/delete-qcategory/{id}',[QuestionsController::class,'deleteQcategory']);

Route::get('/add-question',[AddQuestionController::class,'addQuestion'])->middleware('adminauthcheck');
Route::post('/add-question',[AddQuestionController::class,'createQuestion'])->name('create-question');

Route::get('/question-bulk-import',[AddQuestionController::class,'bulkQuestion'])->middleware('adminauthcheck');
Route::get('/demo-download',[AddQuestionController::class,'demoQuestion']);
Route::post('/bulk-question',[AddQuestionController::class,'createBulkQuestion'])->name('bulk-question');

Route::get('/questions-bank',[AddQuestionController::class,'questionBank'])->middleware('adminauthcheck');
Route::get('/edit-questions/{id}',[AddQuestionController::class,'questionBankEdit'])->middleware('adminauthcheck');
Route::post('/edit-questions',[AddQuestionController::class,'updateQuestion'])->name('update-question');
Route::get('/delete-questions/{id}',[AddQuestionController::class,'deleteQuestion']);

Route::get('/course-details/{id}',[AddQuestionController::class,'courseDetails'])->middleware('adminauthcheck');
Route::get('/view-topic/{id}',[AddQuestionController::class,'viewTopic'])->middleware('adminauthcheck');
Route::get('/questions-view/{id}',[AddQuestionController::class,'questionsView'])->middleware('adminauthcheck');


Route::get('/add-courses',[AddCourseController::class,'addCourse'])->middleware('adminauthcheck');
Route::post('/add-courses',[AddCourseController::class,'CreateCourse'])->name('create-course');
Route::get('/edit-courses/{id}',[AddCourseController::class,'editCourse'])->middleware('adminauthcheck');
Route::post('/edit-courses',[AddCourseController::class,'updateCourse'])->name('update-courses');
Route::get('/delete-courses/{id}',[AddCourseController::class,'deleteCourse']);

Route::get('/course-mapping',[CourseMappingController::class,'index'])->middleware('adminauthcheck');
Route::get('get-course',[CourseMappingController::class,'getCourse'])->name('getCourse');
Route::get('course-get',[CourseMappingController::class,'courseGet'])->name('courseGet');
Route::post('/course-mapping',[CourseMappingController::class,'courseMap'])->name('course.map');
Route::post('/course-mapping-student',[CourseMappingController::class,'courseMapStudent'])->name('course.map.student');
Route::get('/show-answer',[CourseMappingController::class,'showAnswer'])->middleware('adminauthcheck');
Route::get('/test/{id}',[CourseMappingController::class,'Test']);

Route::get('/results-quiz-wise',[QuizResultController::class,'indexQuiz'])->middleware('adminauthcheck');
Route::get('quiz-wise-result',[QuizResultController::class,'quizCourse'])->name('quizCourse');
Route::get('result-quiz-wise',[QuizResultController::class,'getQuiz'])->name('getQuiz');
Route::get('quiz-result',[QuizResultController::class,'getQuizResult'])->name('getQuizResult');
Route::get('/results-batch-wise',[QuizResultController::class,'indexBatch'])->middleware('adminauthcheck');
Route::get('/results-date-wise',[QuizResultController::class,'indexDate']);
Route::get('/quiz-all-results',[QuizResultController::class,'allStudentResult']);
Route::get('/quiz-result/{student_id}/{topic_id}',[QuizResultController::class,'singleQuizResult']);
  
Route::post('/admin-login',[AdminAuth::class,'AdminLogin'])->name('admin-login');
Route::get('/admin-dashboard',[AdminAuth::class,'index'])->middleware('adminauthcheck');


//********************************************************************************************* */



// Admin Livewire Class
//---------------------------------
Route::get('/reset-password',Resetpassword::class);

