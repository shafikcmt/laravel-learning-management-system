<?php

namespace App\Imports;

use App\Models\StudentsBatch;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Validator;



class studentsBatchImport implements WithHeadingRow,ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new StudentsBatch([
    //         'student_roll'      => $row['student_roll'], 
    //         'batch_id'      => request('batch_id'),

    //     ]);
    // }



    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
             '*.student_roll'       => 'required',
         ])->validate();

        foreach ($rows as $row) {
            StudentsBatch::create([
                'student_roll'      => $row['student_roll'], 
                'batch_id'      => request('batch_id'),
            ]);

        }

    }
}
