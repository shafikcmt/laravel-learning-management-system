<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolStudent;
use App\Models\Course;
use App\Models\Qtopic;
use App\Models\attempt_quiz;
use App\Models\Qcategory;
use Illuminate\Support\Facades\Mail; 
use Session;



class SchoolQuiz extends Controller
{
     public function RegistrationPage(){
        return view('auth.school.student-registration');
     }
     public function LoginPage(){
        return view('auth.school.school-student-login');
     }
     public function SchoolStudentDashboard(){
        $data = array();
        if(Session::has('ssloginId')){
            $data = SchoolStudent::where('id','=',Session::get('ssloginId'))->first(); 
            $courses = Course::where('id','=',1)->get();
            $courses = Course::where('id','=',1)->get();
            }
        return view('/school-student-dashboard',compact('data','courses'));
     }

     public function SchoolStudentRegistration(Request $request){
      $request->validate([
          'name'        => 'required',
          'school_name' => 'required',
          'contact_num' => 'required|numeric|digits:10',
          'email'       => 'required|email',
          'password'    => 'required|min:8'
      ]);
          $student = new SchoolStudent();
          $student->name = $request->name;
          $student->school_name = $request->school_name;
          $student->contact_num = $request->contact_num;
          $student->email = $request->email;
          $student->password = $request->password;
          $result = $student->save();
          if($result){
          return back()->with('message','You have Registered Successfully');
         //  return redirect('/student-login');
          }
          else{
          return back()->with('message','something wrong');
          }
          $details = [
            'title' => 'mail from shafiqul',
            'body' => 'mail from shafiqul testing',
          ];
          Mail::to("gth.shafiqul@geeta.edu.in")->send(new SchoolQuiz($details));
          return 'Email Sent';
      }

     public function LoginSchoolStudent(Request $request){
      $request->validate([
          'email'=>'required',
          'password'=>'required'
      ]);
      $student = SchoolStudent::where('email','=',$request->email)->first();
      if($student){
      if($request->password == $student->password){
          $request->session()->put('ssloginId',$student->id);
          return redirect('/school-student-dashboard');
      }else{
          return back()->with('message','Password is not match');
      }
      
      }
      else{
          return back()->with('message','This Email is not Registered ');
      }
  }
        public function SchoolLogout(){
        if(Session::has('ssloginId'));
        Session::pull('ssloginId');
        return redirect('/school-student-login');
        }


        public function SchoolcourseView($id)
        {
            $data = SchoolStudent::where('id','=',Session::get('ssloginId'))->first();
            $courses = Course::find($id);
            $qcategories = Course::find($id)->qcategory;
            $qcategory = Qcategory::find($id);
            return view('/school-course-view',compact('qcategories','courses','qcategory','data'));
        }
        public function startSchoolQuiz($id){
            $data = SchoolStudent::where('id','=',Session::get('ssloginId'))->first();
            $qtopic = Qtopic::find($id);
            $qcategory = Qtopic::find($id)->qcategory;
            $attemp = attempt_quiz::all();
            foreach($attemp as $attemp){
                if($data->id == $attemp->student_id && $qtopic->id == $attemp->topic_id && $attemp->status == 1){
                    return back()->with('already_attemp','This Quiz Already Taken');
                }
            }
           
            return view('/start-school-quiz',compact('qtopic','data','qcategory'));
        } 

        public function schoolQuiz($id){
            $data = SchoolStudent::where('id','=',Session::get('ssloginId'))->first();
            $qtopic = Qtopic::find($id);
            $shuffle = Qtopic::find($id)->addquestion->shuffle();
            $questions = $shuffle->skip(0)->take($qtopic->total_question);
            return view('/school-quiz',compact('questions','data','qtopic'));
        }
}
