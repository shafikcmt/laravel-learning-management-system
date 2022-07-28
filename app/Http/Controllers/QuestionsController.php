<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qcategory;
use App\Models\Qtopic;
use App\Models\Course;
use App\Models\AddQuestion;
use Excel;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Exports\QuestionsExport;
class QuestionsController extends Controller
{
    public function addTopic(){
        $topics = DB::table('qcategories')
        ->leftJoin('qtopics', 'qcategories.id', '=', 'qtopics.qcategory_id')
        ->paginate(10);
        $categories = Qcategory::all();
        return view('/questions-topic',compact('categories','topics'));
    }
    public function createTopic(Request $request){
        $request->validate([
            'topic_name' => 'required',
        ]);
        $qcategory = Qcategory::find($request->category_id);
        $topics = new Qtopic;
        $topics->topic_name = $request->topic_name;
        $qcategory->qtopic()->save($topics);
        return back()->with('add-topic','Topic added successfully !');
    }
    public function editTopic($id){
        $qtopics = Qtopic::find($id);
        $categories = Qcategory::all();
        return view('/edit-topic',compact('categories','qtopics'));
    }

    public function updateTopic(Request $request){
        $qcategory = Qcategory::find($request->category_id);
        $qtopics = Qtopic::find($request->id);
        $qtopics->topic_name = $request->topic_name;
        $qcategory->qtopic()->save($qtopics);
        return back()->with('update-topic','Topic Updated Successfully !');
    }

    public function deleteTopic($id){
        Qtopic::where('id',$id)->delete();
        return back()->with('delete-topic','Topic record Deleted Successfully !');
    }

    public function addCategory(){
        $categories = DB::table('courses')
        ->leftJoin('qcategories', 'courses.id', '=', 'qcategories.course_id')
        ->paginate(10);
        // $categories = Qcategory::all();
        $courses = Course::all();
        return view('/questions-category',compact('categories','courses'));
    }

    public function createQcategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:qcategories',
        ]);
        $courses = Course::find($request->course_id);
        $categories = new Qcategory;
        $categories->category_name = $request->category_name;
        $courses->qcategory()->save($categories);
        return back()->with('add-category','Category record successfully Added !');
    }
    public function editQcategory($id){
        $courses = Course::all();
        $categories = Qcategory::find($id);
        return view('/edit-qcategory',compact('categories','courses'));
    }

    public function updateQcategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:qcategories',
        ]);
        $courses = Course::find($request->course_id);
        $categories = Qcategory::find($request->id);
        $categories->category_name = $request->category_name;
        $courses->qcategory()->save($categories);
        return back()->with('update-category','Category Updated Successfully !');
        return redirect('/edit-qcategory');
    }

    public function deleteQcategory($id){
        Qcategory::where('id',$id)->delete();
        return back()->with('delete-category','Category record Deleted Successfully !');
    }
    public function ExportintoExcell(){
        return Excel::download(new QuestionsExport,'Questions.xlsx');
    }
    public function ExportintoCSV()
    {
        return Excel::download(new QuestionsExport,'Questions.csv');
    }

    public function getQuestionsPDF(){
        $questions = AddQuestion::all();
        return view('/all-questionpdf',compact('questions'));
    }
    public function ExportintoPDF()
    {
        $questions = AddQuestion::all();
        $pdf = PDF::loadView('all-questionpdf',compact('questions'));
        return $pdf->download('Questions.pdf');
    }

}
