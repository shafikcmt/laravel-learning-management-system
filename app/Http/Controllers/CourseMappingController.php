<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
class CourseMappingController extends Controller
{
    public function index(Request $request){
        $categories = Category::orderBy('id','DESC')->get();
        $batches = Batch::orderBy('id','DESC')->get();
        $courses = Category::find($request->category_id);
        return view('course-mapping',compact('categories','batches','courses'));
    }
    public function Test(){
        // $categories = Category::find($request->id);       
        // foreach($categories->course as $course){

        //     echo $course.'<br>';
        // }
        $data = DB::table('categories')
            ->leftJoin('courses', 'categories.id', '=', 'courses.category_id')
            ->get();

            foreach($data as $data){
                echo $data->category_name;
            }

        // return view('test',compact());
    }
}
