<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
class StudentImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'name'      => $row['name'],
            'roll'      => $row['roll'],
            'class'     => $row['class'],
            'branch'    => $row['branch'],
            'semester'  => $row['semester'],
            'mobile'    => $row['mobile'],
            'email'     => $row['email'],
            'password'  => Hash::make($row['password']),
        ]);
    }
}

