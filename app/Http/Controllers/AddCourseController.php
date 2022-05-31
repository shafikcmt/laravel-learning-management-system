<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Batch; 
use App\Models\Course; 
class AddCourseController extends Controller
{
    public function addCourse(){
        $categories = Category::all();
        return view('/add-courses',compact('categories'));
    }
    public function CreateCourse(Request $request){
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $categories = Category::find($request->category_id);
        $course = new Course();
        $course->name = $request->name; 
        $course->start_date = $request->start_date; 
        $course->end_date = $request->end_date;
        $course->image = $imageName;
        $categories->course()->save($course);
        return back()->with('add-courses','Course record Added Successfully !');
    }
}
