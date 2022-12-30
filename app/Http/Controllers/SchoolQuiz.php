<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolStudent;
use Illuminate\Support\Facades\Mail;



class SchoolQuiz extends Controller
{
     public function RegistrationPage(){
        return view('auth.school.student-registration');
     }
     public function LoginPage(){
        return view('auth.school.school-student-login');
     }

     public function SchoolStudentRegistration(Request $request){
      $request->validate([
          'name'      => 'required',
          'school_name'     => 'required',
          'contact_num'    => 'required|numeric|digits:10',
          'email'     => 'required|email',
          'password'  => 'required|min:8'
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
          $request->session()->put('loginId',$student->id);
          
          return 'Login';
      }else{
          return back()->with('message','Password is not match');
      }
      
      }
      else{
          return back()->with('message','This roll number is not Registered ');
      }
  }
}
