<?php

namespace App\Imports;

use App\Models\AddQuestion;
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
    // public function model(array $row)
    // {
    //     return new AddQuestion([
    //         'question'  => $row['question'],
    //         'answer'    => $row['answer'],
    //         'option1'   => $row['option1'],
    //         'option2'   => $row['option2'],
    //         'option3'   => $row['option3'],
    //         'option4'   => $row['option4'],
    //         'qtopic_id' => $row['qtopic_id'],
    //     ]);
    // }


    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
             '*.question' => 'required',
             '*.answer' => 'required',
             '*.option1' => 'required',
             '*.option2' => 'required',
             '*.option3' => 'required',
             '*.option4' => 'required',
             '*.qtopic_id' => 'required',
         ])->validate();

        foreach ($rows as $row) {
            AddQuestion::create([
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
}

