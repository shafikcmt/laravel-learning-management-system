<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Batch; 
use App\Models\Course; 
use Illuminate\Support\Facades\DB;
class AddCourseController extends Controller
{
    public function addCourse(){
        $categories = Category::all();
        $courses = DB::table('categories')
        ->leftJoin('courses', 'categories.id', '=', 'courses.category_id')
        ->paginate(10);
        return view('/add-courses',compact('categories','courses'));
    }
    public function Courselist(){
        $categories = Category::all();
        $courses = DB::table('categories')
        ->leftJoin('courses', 'categories.id', '=', 'courses.category_id')
        ->paginate(10);
        return view('/course-lists',compact('categories','courses')); 
    }
    public function CreateCourse(Request $request){
        $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);
        $name = $request->name; 
        $start_date = $request->start_date; 
        $end_date = $request->end_date; 
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $categories = Category::find($request->category_id);
        $course = new Course();
        $course->name = $name;
        $course->start_date = $start_date; 
        $course->end_date = $end_date;
        $course->image = $imageName; 
        $categories->course()->save($course);
        return back()->with('add-courses','Course record Added Successfully !');
    }
    public function editCourse($id){
      $categories = Category::all();
      $course = Course::find($id);
      return view('edit-courses',compact('course','categories'));
    }
    public function updateCourse(Request $request){
        $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);

        $categories = Category::find($request->category_id);
        $course = Course::find($request->id);

        unlink(public_path('images').'/'.$course->image);
        $name = $request->name;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
      
        
        $course->name = $name;
        $course->start_date = $start_date;
        $course->end_date = $end_date;
        $course->image = $imageName;
        $categories->course()->save($course);
        return back()->with('update-courses','Course record Updated Successfully !');
    }
    public function deleteCourse($id){
        $course = Course::find($id);
        unlink(public_path('images').'/'.$course->image);
        $course->delete();
        return back()->with('course-deleted','Course rocord Deleted Successfully !');
    }
}
