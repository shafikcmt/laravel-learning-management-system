<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Batch;
use App\Models\Course;
class CourseMappingController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id','DESC')->get();
        $batches = Batch::orderBy('id','DESC')->get();
        $courses = Course::orderBy('id','DESC')->get();
        return view('course-mapping',['batches'=>$batches],['categories'=>$categories],['courses'=>$courses]);
    }
}
