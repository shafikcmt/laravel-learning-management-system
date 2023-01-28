<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolStudent;
use App\Models\Course;
use App\Models\Qtopic;
use App\Models\AttemptsSchoolQuiz;
use App\Models\Qcategory;
use App\Models\QuizAnswer;
use Illuminate\Support\Facades\Mail; 
use App\Mail\SchoolMailVarify;
use Illuminate\Support\Facades\DB;

use Session;



class SchoolQuiz extends Controller
{
     public function RegistrationPage(){
        return view('auth.school.student-registration');
     }
     public function LoginPage(){
        return view('auth.school.school-student-login');
     }
     public function SchoolStudentDashboard(){
        $data = array();
        if(Session::has('ssloginId')){
            $data = SchoolStudent::where('id','=',Session::get('ssloginId'))->first(); 
            $courses = Course::where('id','=',1)->get();
            $courses = Course::where('id','=',1)->get();
            }
        return view('/school-student-dashboard',compact('data','courses'));
     }

     public function SchoolStudentRegistration(Request $request){
      $request->validate([
          'name'        => 'required',
          'school_name' => 'required',
          'contact_num' => 'required|numeric|digits:10',
          'email'       => 'required|email|unique:school_students',
          'password'    => 'required|min:8'
      ]);
          $student = new SchoolStudent();
          $student->name = $request->name;
          $student->school_name = $request->school_name;
          $student->contact_num = $request->contact_num;
          $student->email = $request->email;
          $student->password = $request->password;
          $result = $student->save();
        
          if($result){
            $details = [
                'title' => 'Login Access',
                'email' => $request->email,
                'name' => $request->name,
                'password' => $request->password
            ];
        Mail::to($request->email)->send(new SchoolMailVarify($details));
          return back()->with('message','Thanks for registering to Geeta University Test! A verification email has been sent to your provided email address.');
         //  return redirect('/student-login');
           
          }
          else{
          return back()->with('message','something wrong');
          }
        
        
        
      }

     public function LoginSchoolStudent(Request $request){
      $request->validate([
          'email'=>'required',
          'password'=>'required'
      ]);
      $student = SchoolStudent::where('email','=',$request->email)->first();
      if($student){
      if($request->password == $student->password){
          $request->session()->put('ssloginId',$student->id);
          return redirect('/school-student-dashboard');
      }else{
          return back()->with('message','Password is not match');
      }
      
      }
      else{
          return back()->with('message','This Email is not Registered ');
      }
  }
        public function SchoolLogout(){
        if(Session::has('ssloginId'));
        Session::pull('ssloginId');
        return redirect('/school-student-login');
        }


        public function SchoolcourseView($id)
        {
            $data = SchoolStudent::where('id','=',Session::get('ssloginId'))->first();
            $courses = Course::find($id);
            $qcategories = Course::find($id)->qcategory;
            $qcategory = Qcategory::find($id);
            return view('/school-course-view',compact('qcategories','courses','qcategory','data'));
        }
        public function startSchoolQuiz($id){
            $data = SchoolStudent::where('id','=',Session::get('ssloginId'))->first();
            $qtopic = Qtopic::find($id);
            $qcategory = Qtopic::find($id)->qcategory;
            $attemp = AttemptsSchoolQuiz::all();
            foreach($attemp as $attemp){
                if($data->id == $attemp->student_id && $qtopic->id == $attemp->topic_id && $attemp->status == 1){
                    return back()->with('already_attemp','This Quiz Already Taken');
                }
            }
           
            return view('/start-school-quiz',compact('qtopic','data','qcategory'));
        } 

        public function schoolQuiz($id){
            $data = SchoolStudent::where('id','=',Session::get('ssloginId'))->first();
            $qtopic = Qtopic::find($id);
            $shuffle = Qtopic::find($id)->addquestion->shuffle();
            $questions = $shuffle->skip(0)->take($qtopic->total_question);
            return view('/school-quiz',compact('questions','data','qtopic'));
        }

        public function schoolSubmitAnswer(Request $request){
            $data = SchoolStudent::where('id','=',Session::get('ssloginId'))->first();
            $request->validate([
                // 'answer'        => 'required',
            ]);
            $c = count($request->answer);
            $answers = [];
            foreach($request->get('answer') as $question_id => $answer ){
                $answers[] = [
                    'student_id' => $request->student_id,
                    'qtopic_id' => $request->topic_id,
                    'answer' => $answer,
                    'qanswer' => $request['canswer'][$question_id],
                    'addquestion_id' => $question_id,          
                ];
               
            }
            QuizAnswer::insert($answers);
            $results = QuizAnswer::select("*")->where([
                ["student_id", "=", $data->id],
                ["qtopic_id", "=", $request->topic_id]
            ])->get();
                $correct=0;
                $wrong=0;
            foreach($results as $result){
                if($result->answer == $result->qanswer){
                    $correct +=1;
                }else{
                    $wrong +=1;
                }
            }
            $schoolstudent = SchoolStudent::find($request->student_id);
            $school_quiz = new AttemptsSchoolQuiz;
            $school_quiz->school_student_id = $request->student_id;
            $school_quiz->topic_name = $request->topic_name;
            $school_quiz->topic_id = $request->topic_id;
            $school_quiz->right_ans = $correct;
            $school_quiz->wrong_ans = $wrong;
            $school_quiz->perchantage = round($correct/$results->count() * 100);
            $school_quiz->status = '1';
            $schoolstudent->quizattempt()->save($school_quiz);
            return view('/school-submit-answer')->with(['data'=>$data,'results'=>$results,'correct'=>$correct,'wrong'=>$wrong]);
        }
        public function schoolStudentResult(){          
            $quiz_results = DB::table('attempts_school_quizzes')
            ->leftJoin('school_students', 'attempts_school_quizzes.school_student_id', '=', 'school_students.id')
            ->get();  
            return view('/school-quiz-all-results',compact('quiz_results'));
        }
}
