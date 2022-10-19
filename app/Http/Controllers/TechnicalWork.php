<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\TechnicalSkills;
use App\Models\AddTraining;
use App\Models\AddCertificate;
use App\Models\Hackathon;
use Session;
class TechnicalWork extends Controller
{
    public function index(){
        $data = Student::where('id','=',Session::get('loginId'))->first(); 
        $technicalskill = TechnicalSkills::all();
        $trainingskills = AddTraining::select('*')->where('student_id','=',$data->id)->get();
        $certificate = AddCertificate::select('*')->where('student_id','=',$data->id)->get();
        $hackathons = Hackathon::select('*')->where('student_id','=',$data->id)->get();
        return view('technical-work',compact('data','technicalskill','trainingskills','certificate','hackathons'));
    }
    public function TechnicalSkill($id){
        $techskill = TechnicalSkills::find($id);
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $trainingskills = AddTraining::select('*')->where('student_id','=',$data->id)->get();
        $certificate = AddCertificate::select('*')->where('student_id','=',$data->id)->get();
        $hackathons = Hackathon::select('*')->where('student_id','=',$data->id)->get();
        return view('technical-skill',compact('data','techskill','trainingskills','certificate','hackathons'));
    }
    public function AddTechnicalSkill($id){
        $techskills = TechnicalSkills::find($id);
        $data = Student::where('id','=',Session::get('loginId'))->first(); 
        return view('add-technical-skill',compact('data','techskills'));
    }
    public function TrainingAdd(Request $request){
        $request->validate([
            'course'        => 'required',
            'instructor_name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'event' => 'required',
            'organiged_by' => 'required',
            'place' => 'required',
            'course_completion' => 'required',
            'learning_type' => 'required',
            'certificate_id' => 'required'
        ]);
        $student = Student::where('id','=',Session::get('loginId'))->first(); 
        $training = new AddTraining();
        $training->course = $request->course;
        $training->instructor_name = $request->instructor_name;
        $training->event = $request->event;
        $training->from = $request->from;
        $training->to = $request->to;
        $training->organiged_by = $request->event;
        $training->organiged_by = $request->organiged_by;
        $training->learning_type = $request->learning_type;
        $training->place = $request->place;
        $training->course_completion = $request->course_completion;
        $training->certificate_id = $request->certificate_id;
        $training->type_of_campus = $request->type_of_campus;
        $student->addtraining()->save($training);
        return back()->with('add-training','Training Add Successfully !');
    }
    public function AddCertificate(Request $request){
        $request->validate([
            'certificate_name'        => 'required',
            'certificate_from' => 'required',
            'instructor_name' => 'required',
            'score' => 'required',
            'test_center_name' => 'required',
            'year_of_pass' => 'required',
            'certificate_id' => 'required',
            'type_of_campus' => 'required',
        ]);

        $student = Student::where('id','=',Session::get('loginId'))->first(); 
        $certificate = new AddCertificate();
        $certificate->certificate_name = $request->certificate_name;
        $certificate->certificate_from = $request->certificate_from;
        $certificate->instructor_name = $request->instructor_name;
        $certificate->score = $request->score;
        $certificate->test_center_name = $request->test_center_name;
        $certificate->year_of_pass = $request->year_of_pass;
        $certificate->certificate_id = $request->certificate_id;
        $certificate->type_of_campus = $request->type_of_campus;
        $student->addcertificate()->save($certificate);
        return back()->with('add-certificate','Certificate Add Successfully !');
    }
    public function AddHackathon(Request $request){

        $request->validate([
            'course'        => 'required',
            'instructor_name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'organiged_by' => 'required',
            'learning_type' => 'required',
            'event' => 'required',
            'total_hours' => 'required',
            'certificate_id' => 'required',
            'type_of_campus' => 'required'
        ]);

        $student = Student::where('id','=',Session::get('loginId'))->first();
        $hackathon = new Hackathon();
        $hackathon->course = $request->course;
        $hackathon->instructor_name = $request->instructor_name;
        $hackathon->from = $request->from;
        $hackathon->to = $request->to;
        $hackathon->organiged_by = $request->organiged_by;
        $hackathon->learning_type = $request->learning_type;
        $hackathon->event = $request->event;
        $hackathon->total_hours = $request->total_hours;
        $hackathon->certificate_id = $request->certificate_id;
        $hackathon->type_of_campus = $request->type_of_campus;
        $student->addhackathon()->save($hackathon);
        return back()->with('add-hackathon','Hackathon Add Successfully !');
        
    }
}
