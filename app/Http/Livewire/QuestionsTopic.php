<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Qtopic;

class QuestionsTopic extends Component
{
    public $topic_name;
    public function render()
    {
        $this->qtopics = Qtopic::all();
        return view('livewire.questions-topic');
    }
    public function insertTopic(){
        // $this->validate = [(
        //     // 'topic_title'  'required|unique',
        // )];
        $topic = new Qtopic;
        $topic->topic_title = $this->topic_name;
        $topic->save();
        session()->flash('message', 'Question topic successfully added.');
    }

    public function edit($id)
    {
        $topics = Qtopic::findOrFail($id);
        $this->student_id = $id;
        $this->topic_title = $topics->topic_name;
        $this->email = $topics->email;
        $this->mobile = $topics->mobile;
    
       
    }
}
