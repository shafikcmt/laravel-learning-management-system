<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class AllStudent extends Component
{
    public function render()
    {
        $students = Student::all();
        return view('livewire.all-student',['students'=>$students]);
    }
}
