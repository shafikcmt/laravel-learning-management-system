<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Student;
use App\Models\Qtopic;
use App\Models\AddQuestion;
use Session;
use App\Models\Qcategory;
use Illuminate\Support\Facades\DB;
class CourseMappingController extends Controller
{
    public function index(Request $request){
        $categories = Category::orderBy('id','DESC')->get();
        $batches = Batch::orderBy('id','DESC')->get();
        $courses = Category::find($request->category_id);
        return view('course-mapping',compact('categories','batches'));
    }
    public function courseView($id)
    {
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $courses = Course::find($id);
        $qcategories = Course::find($id)->qcategory;
        $qcategory = Qcategory::find($id);
        return view('/course-view',compact('qcategories','courses','qcategory','data'));
    }
    public function allQuestion($id){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $qtopic = Qtopic::find($id);
        return view('/all-question',compact('qtopic','data'));
    }
    public function Test(){
        // $categories = Category::find($request->id);       
        // foreach($categories->course as $course){

        //     echo $course.'<br>';
        // }
        $data = DB::table('qcategories')
        ->leftJoin('qtopics', 'qcategories.id', '=', 'qtopics.qcategory_id')
        ->get();

            foreach($data as $data){
                echo $data->topic_name;
            }

        // return view('test',compact());
    }
}
