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
        $this->batch_items = Batch::all();
        return view('livewire.add-batch');
    }
    public function AddBatch(){
        $batch = new Batch;
        $batch->batch_name = $this->batch;
        $batch->save();
        session()->flash('message','Successfully added Batch.');
        return redirect('/add-batch');
    }
}
