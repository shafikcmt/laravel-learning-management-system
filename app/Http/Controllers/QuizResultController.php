<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attempt_quiz;
use App\Models\QuizAnswer;
use App\Models\Batch;
use App\Models\Category;
use App\Models\Qtopic;
use Illuminate\Support\Facades\DB;


 

class QuizResultController extends Controller
{
    public function indexQuiz(){
       
        $categories = Category::all();
        return view('/results-quiz-wise',compact('categories'));
    }
    public function quizCourse(Request $request){
        $course = \DB::table('courses')
        ->where('category_id', $request->id)
        ->get();
    
    if (count($course) > 0) {
        return response()->json($course);
    }
    }

    public function getQuiz(Request $request){
        $quiz = \DB::table('qtopics')
        ->where('qcategory_id', $request->id)
        ->get();
    
    if (count($quiz) > 0) {
        return response()->json($quiz);
    }
    }

    public function getQuizResult(Request $request){
        if($request->ajax())
        {
         $output = '';
         $query = $request->get('query');
         if($query != '')
         {
          $data = DB::table('attempt_quizzes')
            ->where('topic_id', $query)
            ->get();
            
         }
         else
         {
          $data = DB::table('attempt_quizzes')
            ->orderBy('id', 'desc')
            ->get();
         }
         $total_row = $data->count();
         if($total_row > 0)
         {
        
          foreach($data as $row)
          {
           $output .= '
           <tr>
            <td>'.$row->student_name.'</td>
            <td>'.$row->student_roll.'</td>
            <td>'.$row->student_class.'</td>
            <td>'.$row->student_branch.'</td>
            <td>'.$row->student_semester.'</td>
            <td>'.$row->topic_name.'</td>
            <td>
            <a class="btn btn-primary" href="/quiz-result/'.$row->student_id.'/'.$row->topic_id.'">View</a>
            </td>
           </tr>
           
           ';
           
          }
         }
         else
         {
          $output = '
          <tr>
           <td align="center" colspan="8">No Data Found</td>
          </tr>
          ';
         }
         $data = array(
          'table_data'  => $output,
          'total_data'  => $total_row
         );
   
         echo json_encode($data);
        }
    }
    public function indexBatch(){
        return view('/results-batch-wise');
    }

    public function indexDate(){
        return view('/results-date-wise');
    }
    public function allStudentResult(){
        $quiz_results = attempt_quiz::orderBy('id','DESC')->get();
        return view('/quiz-all-results',compact('quiz_results'));
    }

    public function singleQuizResult($stu_id,$topic_id){
        $quiz_results = QuizAnswer::select("*")->where([
            ["student_id", "=", $stu_id],
            ["qtopic_id", "=", $topic_id]
        ])->get();
        $attemp_students = attempt_quiz::select("*")->where([
            ["student_id", "=", $stu_id],
            ["topic_id", "=", $topic_id]
        ])->get();
        return view('/quiz-result',compact('quiz_results','attemp_students'));
    }

   
}
