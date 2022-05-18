<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Hash;

class AddStudents extends Component
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

        return view('livewire.add-students');
    }
    public function AddStudent(){
        $this->validate = [
            'name'      => 'required',
            'roll'      => 'required|unique|numeric|digits_between:5,12',
            'class'     => 'required',
            'branch'    => 'required',
            'semester'  => 'required',
            'mobile'    => 'required|digits:10',
            'email'     => 'required|email',
            'password'  => 'required'
        ];
        $student = new Student;
        $student->name = $this->name;
        $student->roll = $this->roll;
        $student->class = $this->class;
        $student->branch = $this->branch;
        $student->semester = $this->semester;
        $student->mobile = $this->mobile;
        $student->email = $this->email;
        $student->password = Hash::make($this->password);
        $student->save();
        session()->flash('message','Student data inserted Successfully!');
        return redirect('/all-student');
    }
}
