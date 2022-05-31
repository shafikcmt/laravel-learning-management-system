<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Student;
use Hash;
use Session;
class StudentRegistrations extends Component
{
    // public $name;
    // public $roll;
    // public $class;
    // public $branch;
    // public $semester;
    // public $mobile;
    // public $email;
    // public $password;
    // public $re_password;
 
    public function render()
    {
        return view('livewire.student-registration');
    }
    public function StudentRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'roll' => 'required|unique:students',
            'class' => 'required',
            'branch' => 'required',
            'semester' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'password' => 'required',
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
            // return back()->with('message','You have Registered Successfully')->redirect('livewire.studentlogin');
            return back()->with('message','You have Registered Successfully');
           
        }
        else{
           return back()->with('message','something wrong');
        }
    }
}
