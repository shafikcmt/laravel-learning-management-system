<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Excel;
use Session;
use App\Imports\StudentImport;
use App\Exports\StudentsExport;
use Hash;
use PDF;


class AllStudentController extends Controller
{
    public function allStudent(Request $request){
        // $students = Student::orderBy('id','DESC')->paginate(10);
        return view('/all-student');
    }
    public function action(Request $request){
        if($request->ajax())
        {
         $output = '';
         $query = $request->get('query');
         if($query != '')
         {
          $data = DB::table('students')
            ->where('name', 'like', '%'.$query.'%')
            ->orWhere('roll', 'like', '%'.$query.'%')
            ->orWhere('class', 'like', '%'.$query.'%')
            ->orWhere('branch', 'like', '%'.$query.'%')
            ->orWhere('semester', 'like', '%'.$query.'%')
            ->orWhere('mobile', 'like', '%'.$query.'%')
            ->orWhere('email', 'like', '%'.$query.'%')
            ->orderBy('id', 'desc')
            ->get();
            
         }
         else
         {
          $data = DB::table('students')
            ->orderBy('id', 'desc')
            ->get();
         }
         $total_row = $data->count();
         if($total_row > 0)
         {
        
          foreach($data as $serial => $row)
          {
           $output .= '
           <tr>
            <td>'.$row->name.'</td>
            <td>'.$row->roll.'</td>
            <td>'.$row->class.'</td>
            <td>'.$row->branch.'</td>
            <td>'.$row->semester.'</td>
            <td>'.$row->mobile.'</td>
            <td>'.$row->email.'</td>
            <td>
            <a class="btn btn-primary" href="edit-student/'.$row->id.'">Edit</a>
            <a class="btn btn-primary" href="student-delete/'.$row->id.'">Delete</a>
            </td>
           </tr>
           
           ';
           
          }
         }
         else
         {
          $output = '
          <tr>
           <td align="center" colspan="8">No Data Found</td>
          </tr>
          ';
         }
         $data = array(
          'table_data'  => $output,
          'total_data'  => $total_row
         );
   
         echo json_encode($data);
        }
    }
    public function index(){
        return view('/import-students');
    }
    public function import(Request $request){
        $request->validate([
            'file' => 'required|mimes:csv,xlsx', 
        ]);
        Excel::import(new StudentImport,$request->file);
        return back()->with('success', 'Record are imported successfully');
        // Session::flash('success', 'Record are imported successfully');
        // return redirect('/all-student');  
        
    }  
    public function addStudent(){
        return view('/add-students');
    }
    public function createStudent(Request $request){
        $request->validate([
            'name'      => 'required|min:5',
            'roll'      => 'required|numeric|unique:students',
            'class'     => 'required',
            'branch'    => 'required',
            'semester'  => 'required',
            'mobile'    => 'required|numeric|digits_between:1,10',
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
        return back()->with('add-student','Student record successfully Added .');
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
    public function ExportStudentintoPDF()
    {
        $students = Student::all();
        $pdf = PDF::loadView('all-studentspdf',compact('students'));
        return $pdf->download('Studentslist.pdf');
    }

    // public function studentSearch(Request $request){
    //     $search = '%'.$request->search.'%';
    //     $students = Student::where('name','LIKE',$search)
    //     ->orWhere('roll','LIKE',$search)
    //     ->orWhere('class','LIKE',$search)
    //     ->orWhere('branch','LIKE',$search)
    //     ->orWhere('semester','LIKE',$search)
    //     ->orWhere('mobile','LIKE',$search)
    //     ->orWhere('email','LIKE',$search)
    //     ->orderBy('id','DESC')
    //     ->get();
    //     return view('/all-student',compact('students'));

    // }
}
