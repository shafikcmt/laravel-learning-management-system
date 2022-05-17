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
        $topic = new Qtopic;
        $topic->topic_title = $this->topic_name;
        $topic->save();
        session()->flash('message', 'Question topic successfully added.');
    }
}
