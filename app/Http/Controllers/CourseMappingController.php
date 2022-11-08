<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Student;
use App\Models\Qtopic;
use App\Models\Question;
use App\Models\QuizAnswer;
use App\Models\attempt_quiz;
use App\Models\CourseBatch;
use App\Models\StudentsBatch;
use App\Models\AddTraining;

use paginate;
// use Session;
use App\Models\Qcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CourseMappingController extends Controller
{
    public function index(Request $request){
        // $categories = Category::orderBy('id','DESC')->get();
        $categories = \DB::table('categories')->get();
        $batches = Batch::orderBy('id','DESC')->get();
        // $courses = Category::find($request->category_id);
        return view('course-mapping',compact('categories','batches'));
    }
    public function getCourse(Request $request){
        $course = \DB::table('courses')
        ->where('category_id', $request->id)
        ->get();
    
    if (count($course) > 0) {
        return response()->json($course);
    }
    }

    public function courseGet(Request $request){
        $course = \DB::table('courses')
        ->where('category_id', $request->id)
        ->get();
    
    if (count($course) > 0) {
        return response()->json($course);
    }
    }

    public function courseMap(Request $request){
        $request->validate([
            'course_id'        => 'required',
            'batch_id'       => 'required',
        ]);
        $course_map = new CourseBatch();
        $course_map->course_id = $request->course_id;
        $course_map->batch_id = $request->batch_id;
        $course_map->save();
        return back()->with('course-map','Course map Successfully !');
    }
 
    public function courseMapStudent(Request $request){
        $request->validate([
            'course_id'        => 'required',
            'batch_id'       => 'required',
        ]);
        $course_map = new CourseBatch();
        $course_map->course_id = $request->course_id;
        $course_map->batch_id = $request->batch_id;
        $course_map->save();
        return back()->with('course-map-student','Course map Successfully !');
    }


    public function courseView($id)
    {
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $courses = Course::find($id);
        $qcategories = Course::find($id)->qcategory;
        $qcategory = Qcategory::find($id);
        return view('/course-view',compact('qcategories','courses','qcategory','data'));
    }
    public function startQuiz($id){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $qtopic = Qtopic::find($id);
        $qcategory = Qtopic::find($id)->qcategory;
        $attemp = attempt_quiz::all();
        foreach($attemp as $attemp){
            if($data->id == $attemp->student_id && $qtopic->id == $attemp->topic_id && $attemp->status == 1){
                return back()->with('already_attemp','This Quiz Already Taken');
            }
        }
       
        return view('/start-quiz',compact('qtopic','data','qcategory'));
    }

    public function allQuestion($id){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $qtopic = Qtopic::find($id);
        $questions = Qtopic::find($id)->addquestion->skip(0)->take($qtopic->total_question);
        return view('/all-question',compact('questions','data','qtopic'));
    }
    public function submitAnswer(Request $request){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $request->validate([
            'answer'        => 'required',
        ]);
        $c = count($request->answer);
        // dd($c);
        $answers = [];
        foreach($request->get('answer') as $question_id => $answer ){
            $answers[] = [
                'student_id' => $request->student_id,
                'qtopic_id' => $request->topic_id,
                'answer' => $answer,
                'qanswer' => $request['canswer'][$question_id],
                'addquestion_id' => $question_id,          
            ];
           
        }
    
    
        QuizAnswer::insert($answers);
        $results = QuizAnswer::select("*")->where([
            ["student_id", "=", $data->id],
            ["qtopic_id", "=", $request->topic_id]
        ])->get();
            $correct=0;
            $wrong=0;
        foreach($results as $result){
            if($result->answer == $result->qanswer ){
                $correct +=1;
                
            }else{
                $wrong +=1;
            }
          
        }
        $attemp_exam = new attempt_quiz;
        $attemp_exam->student_id = $request->student_id;
        $attemp_exam->student_name = $request->student_name;
        $attemp_exam->student_roll = $request->student_roll;
        $attemp_exam->student_class = $request->student_class;
        $attemp_exam->student_branch = $request->student_branch;
        $attemp_exam->student_semester = $request->student_semester;
        $attemp_exam->student_mobile = $request->student_mobile;
        $attemp_exam->student_email = $request->student_email;
        $attemp_exam->topic_name = $request->topic_name;
        $attemp_exam->topic_id = $request->topic_id;
        $attemp_exam->right_ans = $correct;
        $attemp_exam->wrong_ans = $wrong;
        $attemp_exam->perchantage = round($correct/$results->count() * 100);
        $attemp_exam->status = '1';
        $attemp_exam->save();


        return view('/submit-answer')->with(['data'=>$data,'results'=>$results,'correct'=>$correct,'wrong'=>$wrong]);
    }
    public function showAnswer(){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $results = QuizAnswer::where('student_id',$data->id)->get();
        $results = QuizAnswer::select("*")->where([
            ["student_id", "=", $data->id],
            ["qtopic_id", "=", $request->topic_id]
        ])->get();
        foreach ($results as $result) {
         dd($result->answer);
        } 
        // return view('/submit-answer')->with('submit_answer','Your Answer Submited Successfully !')->with(['data'=>$data,'results'=>$results]);
    }
    public function StudentResult(){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $exam_results = attempt_quiz::select("*")->where([
            ["student_id", "=", $data->id]
        ])->get();
        return view('student-quiz-result',compact('data','exam_results'));
    }
   
  
    public function Test(Request $request){  
        $data = Student::where('id','=',Session::get('loginId'))->first();            
        $courses = DB::table('course_batches')
        ->leftJoin('students_batches', 'course_batches.batch_id', '=', 'students_batches.batch_id')
        ->leftJoin('courses', 'course_batches.course_id', '=', 'courses.id')
        ->leftJoin('categories','categories.id', '=','courses.category_id')
        ->where('students_batches.student_roll', '=', $data->roll)
        ->orWhere('course_batches.batch_id', '=', $data->roll)
        ->get(); 

        $drive = DB::table('categories')
        ->leftJoin('courses','categories.id','=','courses.category_id')
        ->leftJoin('qcategories','courses.id','=','qcategories.course_id')
        ->leftJoin('qtopics','qcategories.id','=','qtopics.qcategory_id')
        ->where('courses.category_id','=',2)
        ->get();
        dd($drive->count());

        
    }
}


