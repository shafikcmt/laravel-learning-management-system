<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Qtopic;
use Session;
class AssessmentWork extends Controller
{
    public function index(){
        $drive = Qtopic::all();
        $data = Student::where('id','=',Session::get('loginId'))->first();  
        return view('assessment-work',compact('data','drive'));
    }
    public function Assessments(){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        return view('assessment-part',compact('data'));
    }
    public function DetailReport(){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        return view('detail-report',compact('data'));
    }
}
