<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;
class TechnicalWork extends Controller
{
    public function index(){
        $data = Student::where('id','=',Session::get('loginId'))->first(); 
        return view('technical-work',compact('data'));
    }
    public function TechnicalSkill(){
        $data = Student::where('id','=',Session::get('loginId'))->first(); 
        return view('technical-skill',compact('data'));
    }
}
