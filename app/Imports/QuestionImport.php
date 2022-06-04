<?php

namespace App\Imports;

use App\Models\AddQuestion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AddQuestion([
            'question'  => $row['question'],
            'answer'    => $row['answer'],
            'option1'   => $row['option1'],
            'option2'   => $row['option2'],
            'option3'   => $row['option3'],
            'option4'   => $row['option4'],
            'qtopic_id' => $row['qtopic_id'],
        ]);
    }
}
