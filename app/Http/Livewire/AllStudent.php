<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class AllStudent extends Component
{
    public function render()
    {
        $students = Student::orderBy('id','DESC')->get();
        return view('livewire.all-student',['students'=>$students]);
    }
    public function delete($id){
        Student::find($id)->delete();
        session()->flash('message','Student data Deleted ');
    }
}
