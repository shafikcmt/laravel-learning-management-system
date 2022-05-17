<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\student;
use Hash;
class StudentRegistrations extends Component
{
    public $name;
    public $roll;
    public $class;
    public $branch;
    public $semester;
    public $mobile;
    public $email;
    public $password;
    public $re_password;
 
    public function render()
    {
        return view('livewire.student-registration');
    }
    public function StudentRegistration(){
        // $this->validate([
        //     'name' => 'required',
        //     'roll' => 'required|numeric|digits_between:6,12|unique',
        //     'class' => 'required',
        //     'branch' => 'required',
        //     'semester' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6|max:12'
        // ]);
       $student = new student;
       $student->name = $this->name;
       $student->roll = $this->roll;
       $student->class = $this->class;
       $student->branch = $this->branch;
       $student->semester = $this->semester;
       $student->mobile = $this->mobile;
       $student->email = $this->email;
       $student->password = Hash::make($this->password);
       $student->save();
       session()->flash('message','You are registration successfully!');
    //    if($student){
    //     session()->flash('message','You are registration successfully!');
    //    }else{
    //     session()->flash('message','Something Wrong !');
    //    }
       
       return redirect('/student-login');
    }
}
