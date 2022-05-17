<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCourses extends Component
{
    public $course_full_name;
    public $course_short_name;
    public $course_category;
    public $course_start_date;
    public $course_end_date;
    public $course_image;
   
    public function render()
    {
        return view('livewire.add-courses');
    }
}
