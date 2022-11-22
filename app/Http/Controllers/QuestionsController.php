<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qcategory;
use App\Models\Qtopic;
use App\Models\Course;
use App\Models\Question;
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
        $courses = Course::all();
        $categories = Qcategory::all();
        return view('/questions-topic',compact('categories','topics','courses'));
    }
    public function quizGet(Request $request){
        $quizcat = \DB::table('qcategories')
        ->where('course_id', $request->id)
        ->get();
    
    if (count($quizcat) > 0) {
        return response()->json($quizcat);
    }
    }

    public function Getquiz(Request $request){
        $quiztopic = \DB::table('qtopics')
        ->where('qcategory_id', $request->id)
        ->get();
    
    if (count($quiztopic) > 0) {
        return response()->json($quiztopic);
        }
    }


    public function createTopic(Request $request){
        $request->validate([
            'category' => 'required',
            'topic_name' => 'required',
            'quiz_time' => 'required',
            'total_question' => 'required',
        ]);
        $qcategory = Qcategory::find($request->category);
        $topics = new Qtopic;
        $topics->topic_name = $request->topic_name;
        $topics->total_question = $request->total_question;
        $topics->total_time = $request->quiz_time;
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
        $qtopics->total_question = $request->total_question;
        $qtopics->total_time = $request->total_time;
        $qcategory->qtopic()->save($qtopics);
        return back()->with('update-topic','Topic Updated Successfully !');
    }

    public function deleteTopic($id){
        Qtopic::where('id',$id)->delete();
        return back()->with('delete-topic','Topic record Deleted Successfully !');
    }

    public function addCategory(){
        $courses = Course::all();
        return view('/questions-category',compact('courses'));
    }
 
    public function Qcatlist(){
        $categories = DB::table('courses')
        ->leftJoin('qcategories', 'courses.id', '=', 'qcategories.course_id')
        ->paginate(10);
        $courses = Course::all();
        return view('/question-category-list',compact('categories','courses'));
    }

    public function createQcategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:qcategories,category_name,{$this->course_id}',
            
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
        $questions = Question::all();
        return view('/all-questionpdf',compact('questions'));
    }
    public function ExportintoPDF()
    {
        $questions = Question::all();
        $pdf = PDF::loadView('all-questionpdf',compact('questions'));
        return $pdf->download('Questions.pdf');
    }

}
