<?php

namespace App\Imports;

use App\Models\Question;
// use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
class QuestionImport implements WithHeadingRow, ToCollection

{
      /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
             '*.question' => 'required',
             '*.answer' => 'required',
             '*.option1' => 'required',
             '*.option2' => 'required',
             '*.option3' => 'required',
             '*.option4' => 'required',
             '*.type' => 'required',
         ])->validate();

        foreach ($rows as $row) {
            Question::create([
                'question'  => $row['question'],
                'image'     => $row['image'],
                'answer'    => $row['answer'],
                'option1'   => $row['option1'],
                'option2'   => $row['option2'],
                'option3'   => $row['option3'],
                'option4'   => $row['option4'],
                'type'      => $row['type'],
                'qtopic_id' => request('qtopic_id'),
            ]);

        }

    }
}

