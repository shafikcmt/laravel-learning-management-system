<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Response;
use Excel;
use Session;
use Hash;
use PDF;
use App\Imports\StudentImport;
use App\Exports\StudentsExport;

class AllStudentController extends Controller
{
    public function allStudent(Request $request){
        $search = '%'.$request->search.'%';
        $students = Student::where('name','LIKE',$search)
        ->orWhere('roll','LIKE',$search)
        ->orWhere('class','LIKE',$search)
        ->orWhere('branch','LIKE',$search)
        ->orWhere('semester','LIKE',$search)
        ->orWhere('mobile','LIKE',$search)
        ->orWhere('email','LIKE',$search)
        ->orderBy('id','DESC')
        ->get();
        // $students = Student::paginate(10);
        return view('/all-student',compact('students'));
    }
    
    public function index(){
        return view('/import-students');
    }
    // public function Delete($id){
    //     Student::find($id)->delete();
    //     session()->flash('message','Student data Deleted ');
    // }

    public function import(Request $request){
        $request->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls',
        ]);
        $path = $request->file('file');
        Excel::import(new StudentImport,$path);
        Session::flash('success', 'Record are imported successfully');
        return redirect('/all-student'); 
       
    }  
    public function addStudent(){
        return view('/add-students');
    }
    public function createStudent(Request $request){
        $request->validate([
            'name'      => 'required',
            'roll'      => 'required|unique:students',
            'class'     => 'required',
            'branch'    => 'required',
            'semester'  => 'required',
            'mobile'    => 'required',
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $students = new Student;
        $students->name = $request->name;
        $students->roll = $request->roll;
        $students->class = $request->class;
        $students->branch = $request->branch;
        $students->semester = $request->semester;
        $students->mobile = $request->mobile;
        $students->email = $request->email;
        $students->password = $request->password;
        $students->save();
        return back()->with('add-student','Student record successfully Added .')->redirect('/all-student');
    }
   
    public function EditStudent($id){
        $student = Student::find($id);
        return view('edit-student',compact('student'));
    }

    public function UpdateStudent(Request $request){
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->class = $request->class;
        $student->branch = $request->branch;
        $student->semester = $request->semester;
        $student->mobile = $request->mobile;
        $student->email = $request->email;
        $student->save();
        session()->flash('message','Student data Updated Successfully!');
        return redirect('/all-student');
    }
    public function studentDelete($id){
        Student::where('id',$id)->delete();
        return back()->with('delete-student','Student record Deleted Successfully !');
    }
    public function demoDownload(){
    $file = public_path(). "/file/Studentlist.xlsx";
    $headers = ['Content-Type: application/xlsx'];
    if (file_exists($file)) {
        return Response::download($file, 'Studentlist.xlsx', $headers);
    } else {
        echo('File not found.');
    }
    }

    public function ExportintoExcell()
    {
        return Excel::download(new StudentsExport,'Studentslist.xlsx');
    }
    public function ExportintoCSV()
    {
        return Excel::download(new StudentsExport,'Studentslist.csv');
    }
    public function getStudentsPDF(){
        $students = Student::all();
        return view('/all-studentspdf',compact('students'));
    }
    public function ExportintoPDF()
    {
        $students = Student::all();
        $pdf = PDF::loadView('all-studentspdf',compact('students'));
        return $pdf->download('Studentslist.pdf');
    }
    public function studentSearch(Request $request){
        $search = '%'.$request->search.'%';
        $students = Student::where('name','LIKE',$search)
        ->orWhere('roll','LIKE',$search)
        ->orWhere('class','LIKE',$search)
        ->orWhere('branch','LIKE',$search)
        ->orWhere('semester','LIKE',$search)
        ->orWhere('mobile','LIKE',$search)
        ->orWhere('email','LIKE',$search)
        ->orderBy('id','DESC')
        ->get();
        return view('/all-student',compact('students'));

    }
}
