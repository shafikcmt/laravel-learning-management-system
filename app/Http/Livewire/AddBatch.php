<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Batch;

class AddBatch extends Component
{

    public $batch;
    public $batch_items;
    public function render()
    {
        $batches = Batch::orderBy('id','DESC')->get();
        return view('livewire.add-batch',['batches'=>$batches]);
    }
    public function AddBatch(){
        $batch = new Batch;
        $batch->batch_name = $this->batch;
        $batch->save();
        session()->flash('message','Successfully added Batch.');
        return redirect('/add-batch');
    }
    public function delete($id){
        Batch::find($id)->delete();
        session()->flash('message','Batch Deleted');
    }

    public function edit(Request $request){
        $batch = Batch::find($id);
        $batch->batch_name = $this->batch;
        session()->flash('message','Batch Updated');
    }
}
