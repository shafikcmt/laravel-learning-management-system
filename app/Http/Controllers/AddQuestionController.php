<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Qcategory;
use App\Models\Qtopic;
use App\Models\Course;
use App\Models\AddQuestion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Excel;
use Session;
use App\Imports\QuestionImport;
class AddQuestionController extends Controller
{
    public function addQuestion(){
        $qtopics = Qtopic::all();
        return view('/add-question',compact('qtopics'));
    }
    public function createQuestion(Request $request){
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            
        ]);
        $qtopic = Qtopic::find($request->qtopic_id);
        $questions = new AddQuestion;
        $questions->question = $request->question;
        $questions->answer = $request->answer;
        $questions->option1 = $request->option1;
        $questions->option2 = $request->option2;
        $questions->option3 = $request->option3;
        $questions->option4 = $request->option4;
        $qtopic->addquestion()->save($questions);
        return back()->with('add-question','Question added successfully !');
    }
    public function bulkQuestion(){
        $qtopics = Qtopic::all();
        return view('/question-bulk-import',compact('qtopics'));
    }
    
    
    public function createBulkQuestion(Request $request){
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);
        $path = request()->file('file');
        Excel::import(new QuestionImport,$path);
        return back()->with('bulk-question', 'Bulk Question Added Successfully !'); 
    }

    public function questionBank(){
        $questions = DB::table('qtopics')
        ->leftJoin('add_questions', 'qtopics.id', '=', 'add_questions.qtopic_id')
        ->paginate(20);
        return view('/questions-bank',compact('questions'));
    }
    public function questionBankEdit($id){
        
        $qtopics = Qtopic::all();
        $questions = AddQuestion::find($id);
        return view('edit-questions',compact('questions','qtopics'));
    }

    public function updateQuestion(Request $request){
        $request->validate([
            'qtopic_id'     => 'required',
            'question'      => 'required',
            'answer'        => 'required',
            'option1'       => 'required',
            'option2'       => 'required',
            'option3'       => 'required',
            'option4'       => 'required',
        ]);
        $qtopic = Qtopic::find($request->qtopic_id);
        $questions = AddQuestion::find($request->id);
        $questions->question = $request->question;
        $questions->answer   = $request->answer;
        $questions->option1  = $request->option1;
        $questions->option2  = $request->option2;
        $questions->option3  = $request->option3;
        $questions->option4  = $request->option4;
        $qtopic->addquestion()->save($questions);
        return back()->with('update-question','Question Updated Successfully !');
       
    }
    public function deleteQuestion($id){
        AddQuestion::where('id',$id)->delete();
        return back()->with('delete-question','Question Deleted Successfully !');
    }
    public function courseDetails($id){
        $course = Course::find($id);
        $categories = Category::all();
        return view('course-details',compact('course','categories'));
    }
    public function viewTopic($id){
        $qcategory = Qcategory::find($id);
        $qtopics = Qcategory::find($id)->qtopic;
        return view('view-topic',compact('qtopics','qcategory'));

    }
    public function questionsView($id){
        $qtopic = Qtopic::find($id);
        $questions = Qtopic::find($id)->addquestion()->paginate(10);
        return view('questions-view',compact('questions','qtopic'));
    }
    public function demoQuestion(){
        $file = public_path(). "/file/sample_questions.xlsx";
        $headers = ['Content-Type: application/xlsx'];
        if (file_exists($file)) {
            return Response::download($file, 'sample_questions.xlsx', $headers);
        } else {
            echo('File not found.');
        }
    }
  
}
