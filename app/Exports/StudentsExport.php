<?php

namespace App\Exports;

use App\models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class StudentsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
        'id',
        'name',
        'roll', 
        'class',
        'branch',
        'semester',
        'mobile',
        'email',
        ];
    }
    public function collection()
    {
        // return Student::all();
        return collect(Student::getStudents());
    }
}
