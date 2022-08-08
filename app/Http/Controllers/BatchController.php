<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\StudentsBatch;
use Illuminate\Support\Facades\Response;
use Excel;
use App\Imports\studentsBatchImport;
class BatchController extends Controller
{
    public function addBatch(){
        $batches = Batch::paginate(10);
        return view('/add-batch',compact('batches'));
    }

    public function createBatch(Request $request){
        $request->validate([
            'batch_name' => 'required|unique:batches',
        ]);

        $batches = new Batch;
        $batches->batch_name = $request->batch_name;
        $batches->save();
        return back()->with('add-batch','Batch record successfully Added !');
    }
    public function editBatch($id){
        $batches = Batch::find($id);
        return view('/edit-batch',compact('batches'));
    }

    public function updateBatch(Request $request){
        $request->validate([
            'batch_name' => 'required|unique:batches',
        ]);
        $batches = Batch::find($request->id);
        $batches->batch_name = $request->batch_name;
        $batches->save();
        return back()->with('update-batch','Batch Updated Successfully !');
        return redirect('/edit-batch');
    }

    public function batchDelete($id){
        Batch::where('id',$id)->delete();
        return back()->with('delete-batch','Batch record Deleted Successfully !');
    }
    public function demoBatchFile(){
        $file = public_path(). "/file/batch.xlsx";
        $headers = ['Content-Type: application/xlsx'];
        if (file_exists($file)) {
            return Response::download($file, 'batch.xlsx', $headers);
        } else {
            echo('File not found.');
        }
    }
    public function studentsAddBatch(Request $request){
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
            'batch_id' => 'required',
        ]);
        Excel::import(new studentsBatchImport ,$request->file('file'),$request->batch_id);
        return back()->with('students-add-batch','Students add to batch Successfully !');

    }

    public function studentAddBatch(Request $request){
        $request->validate([
            'roll' => 'required|',
            'batch_id' => 'required',
        ]);
        $addbatch = new StudentsBatch;
        $addbatch->batch_id = $request->batch_id;
        $addbatch->student_roll = $request->roll;
        $addbatch->save();
        return back()->with('student-add-batch','Students add to batch Successfully !');

    }
}
