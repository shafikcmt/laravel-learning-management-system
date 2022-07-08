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
        return view('/start-quiz',compact('qtopic','data'));
    }

    public function allQuestion($id){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $questions = Qtopic::find($id)->addquestion;
        $qtopic = Qtopic::find($id);
        return view('/all-question',compact('questions','data','qtopic'));
    }
    public function submitAnswer(Request $request){
        $request->validate([
            'answer'        => 'required',
            'qanswer'       => 'required',
        ]);
        // $quizans = new QuizAnswer;
        // $quizans->student_id = $request->student_id;
        // $quizans->qtopic_id = $request->topic_id;
        // $quizans->addquestion_id  = $request->question_id;
        // $quizans->answer = $request->answer;
        // $quizans->qanswer = $request->qanswer;
        // $quizans->save();
        // return back()->with('add-answer','Your Answer Successfully added !');
        // return dd($quizans);



        $answer = new QuizAnswer;
        $data = $request->all();
        // foreach($request->get('question_id') as $question_id){
            foreach ($request->get('answer') as $question_id  => $answer) {
                $answers[] = [
                    'student_id' => $request->student_id,
                    'qtopic_id' => $request->topic_id,
                    // 'addquestion_id' => $request->question_id,
                    'addquestion_id' => $question_id,
                    'answer' => $answer,
                    'qanswer' => $request->qanswer,
                ];
                
            // }
           

        }
        $ans = $request->get('answer');
        DB::table('quiz_answers')->insert($answers);
        dd($answers); 
        // dd($answers);

        // foreach($request->answer as $answers){

        //    $answers = QuizAnswer::create([
        //      'student_id' => $request->student_id,
        //      'qtopic_id' => $request->topic_id,
        //      'addquestion_id' => $request->question_id,
        //      'answer' => $answers,
        //      'qanswer' => $request->qanswer,
        //     ]);
        //     }

        //     dd($answers);
    }
   
    // public function allQuestion($id){
    //     $data = Student::where('id','=',Session::get('loginId'))->first();
    //     $qtopic = Qtopic::find($id);
    //     return view('/all-question',compact('qtopic','data'));
    // }
    public function Test($id){
        // $categories = Category::find($request->id);       
        // foreach($categories->course as $course){

        //     echo $course.'<br>';
        // }
        $data = DB::table('add_questions')
        ->leftJoin('qtopics', 'add_questions.id', '=', 'add_questions.qtopic_id')
        ->get();

        $qtopics = Qtopic::find($id)->addquestion->all();
        $questions = AddQuestion::where('qtopic_id',$id)->get();
        // echo $qtopics->question.'<br>';
            $i=1;
            foreach($questions as $question){
                echo $i.')'.$question->question.'<br>';
                $i++;
            }
           
        // return view('test',compact());
    }
 
}
