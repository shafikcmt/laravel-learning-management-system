<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attempt_quiz;

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
}
