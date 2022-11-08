<?php

namespace App\Exports;

use App\models\Question;
use Maatwebsite\Excel\Concerns\FromCollection;

class QuestionsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
        'id',
        'question',
        'answer',
        'option1',
        'option2',
        'option3',
        'option4',
       
        ];
    }
    public function collection()
    {
        // return AddQuestion::all();
        return collect(Question::getQuestions());
    }
}
