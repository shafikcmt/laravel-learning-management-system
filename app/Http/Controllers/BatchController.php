<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
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
}
