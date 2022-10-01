<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\TechnicalSkills;
use Session;
class TechnicalWork extends Controller
{
    public function index(){
        $data = Student::where('id','=',Session::get('loginId'))->first(); 
        $technicalskill = TechnicalSkills::all();
        return view('technical-work',compact('data','technicalskill'));
    }
    public function TechnicalSkill($id){
        $techskill = TechnicalSkills::find($id);
        $data = Student::where('id','=',Session::get('loginId'))->first(); 
        return view('technical-skill',compact('data','techskill'));
    }
    public function AddTechnicalSkill($id){
        $techskills = TechnicalSkills::find($id);
        $data = Student::where('id','=',Session::get('loginId'))->first(); 
        return view('add-technical-skill',compact('data','techskills'));
    }
}
