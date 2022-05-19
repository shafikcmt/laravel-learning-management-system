<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Batch;
use App\Models\Qtopic;

class AddQuestion extends Component
{
    public $topic;
    public $category;
    public $sub_category;
    public $question_type;
    public $marks;
    public $image;
    public $question;
    public $option1;
    public $option2;
    public $option3;
    public $option4;
    public function render()
    {
        $categories = Category::orderBy('id','DESC')->get();
        $qtopics = Qtopic::orderBy('id','DESC')->get();
        return view('livewire.add-question',['qtopics'=>$qtopics],['categories'=>$categories]);
    }
}
