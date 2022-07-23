<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attempt_quiz;
use App\Models\QuizAnswer;


class QuizResultController extends Controller
{
    public function indexQuiz(){
        return view('/results-quiz-wise');
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
