<?php

namespace App\Http\Livewire;

use Livewire\Component;

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
        return view('livewire.add-question');
    }
}
