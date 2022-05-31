<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\Models\Student;
use Session;
class StudentAuth extends Controller
{
public function login(){
 return view('auth.student.studentlogin');
}
public function registration(){
    return view('auth.student.student-registration');
}
public function StudentRegister(Request $request){
    $request->validate([
        'name'      => 'required',
        'roll'      => 'required|unique:students',
        'class'     => 'required',
        'branch'    => 'required',
        'semester'  => 'required',
        'mobile'    => 'required',
        'email'     => 'required',
        'password'  => 'required',
    ]);
        $student = new Student();
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->class = $request->class;
        $student->branch = $request->branch;
        $student->semester = $request->semester;
        $student->mobile = $request->mobile;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $result = $student->save();
        if($result){
        // return back()->with('message','You have Registered Successfully');
        return redirect('/student-login');
        // return back()->with('message','You have Registered Successfully');
       
        }
        else{
        return back()->with('message','something wrong');
        }
    }
    public function LoginStudent(Request $request){
        $request->validate([
            'roll'=>'required',
            'password'=>'required|min:6|max:12'
        ]);
        $student = Student::where('roll','=',$request->roll)->first();
        if($student){
        if(Hash::check($request->password,$student->password)){
            $request->session()->put('loginId',$student->id);
            
            return redirect('/student-dashboard');
        }else{
            return back()->with('message','Password is not match');
        }
        
        }
        else{
            return back()->with('message','This roll number is not Registered ');
        }
    }
    public function StudentDashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = Student::where('id','=',Session::get('loginId'))->first();
        }
        return view('/student-dashboard',compact('data'));
    }
    public function Logout(){
        if(Session::has('loginId'));
        Session::pull('loginId');
        return redirect('/student-login');
    }
    public function StudentProfile($id){
        $data = Student::find($id);
        return view('/student-profile',compact('data','id'));
        
    }

}
