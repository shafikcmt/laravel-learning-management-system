<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Student;
use App\Models\Qtopic;
use App\Models\AddQuestion;
use App\Models\QuizAnswer;
use App\Models\attempt_quiz;

// use Session;
use App\Models\Qcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CourseMappingController extends Controller
{
    public function index(Request $request){
        $categories = Category::orderBy('id','DESC')->get();
        $batches = Batch::orderBy('id','DESC')->get();
        $courses = Category::find($request->category_id);
        return view('course-mapping',compact('categories','batches'));
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
        $questions = Qtopic::find($id)->addquestion;
        $qtopic = Qtopic::find($id);
        return view('/all-question',compact('questions','data','qtopic'));
    }
    public function submitAnswer(Request $request){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $request->validate([
            'answer'        => 'required',
            'qanswer'       => 'required',
        ]);
        $answer = new QuizAnswer;
        // $data = $request->all();
            foreach ($request->get('answer') as $question_id  => $answer) {
                $answers[] = [
                    'student_id' => $request->student_id,
                    'qtopic_id' => $request->topic_id,
                    'addquestion_id' => $question_id,
                    'answer' => $answer,
                    'qanswer' => $request->qanswer,
                ];
        }
        $ans = $request->get('answer');
        DB::table('quiz_answers')->insert($answers);
        // $results = QuizAnswer::where('student_id',$data->id)->get();
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
        $attemp_exam->topic_id = $request->topic_id;
        $attemp_exam->status = '1';
        $attemp_exam->save();


        return view('/submit-answer')->with(['data'=>$data,'results'=>$results,'correct'=>$correct,'wrong'=>$wrong]);
    }
    public function showAnswer(){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $results = QuizAnswer::where('student_id',$data->id)->get();
        // $results = QuizAnswer::select("*")->where("student_id",$data->id)->get();
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

        return view('student-quiz-result',compact('data'));
    }
   
  
    public function Test(){
        $data = DB::table('add_questions')
        ->leftJoin('qtopics', 'add_questions.id', '=', 'add_questions.qtopic_id')
        ->get();

        $qtopics = Qtopic::find($id)->addquestion->all();
        $questions = AddQuestion::where('qtopic_id',$id)->get();
        $attemp = attempt_quiz::all();
        echo $attemp->student_id.'<br>';
         dd($attemp->student_id);  
            foreach($attemp as $attemp){
                dd($attemp);
            }
           
        return view('test',compact());
    }
 
}
