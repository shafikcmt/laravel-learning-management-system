<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Hash;
class StudentImport implements WithHeadingRow,ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new Student([
    //         'name'      => $row['name'],
    //         'roll'      => $row['roll'],
    //         'class'     => $row['class'],
    //         'branch'    => $row['branch'],
    //         'semester'  => $row['semester'],
    //         'mobile'    => $row['mobile'],
    //         'email'     => $row['email'],
    //         'password'  => Hash::make($row['password']),
    //     ]);
    // }

    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
             '*.name'       => 'required',
             '*.roll'       => 'required|digits_between:1,15|unique:students',
             '*.class'      => 'required',
             '*.branch'     => 'required',
             '*.semester'   => 'required',
             '*.mobile'     => 'required|digits_between:1,15',
             '*.email'      => 'required|email',
             '*.password'   => 'required',
         ])->validate();

        foreach ($rows as $row) {
            Student::create([
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

}

