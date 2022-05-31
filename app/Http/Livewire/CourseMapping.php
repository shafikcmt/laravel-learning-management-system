<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Qtopic;

class CourseMapping extends Component
{
    public function render()
    {
        $categories = Category::orderBy('id','DESC')->get();
        $batches = Batch::orderBy('id','DESC')->get();
        $courses = Course::orderBy('id','DESC')->get();
        return view('livewire.course-mapping',['batches'=>$batches],['categories'=>$categories],['courses'=>$courses]);
    }
}
