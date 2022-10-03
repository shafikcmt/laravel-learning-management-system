<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'roll',
        'class',
        'branch',
        'semester',
        'mobile',
        'email',
        'password',
    ];
    public static function getStudents(){
    $records = DB::table('students')->select('id','name','roll','class','branch','semester','mobile','email')->get()->toArray();
    return $records;
    }

    public function addtraining(){
        return $this->hasMany(AddTraining::class);
    }
    public function addcertificate(){
        return $this->hasMany(AddCertificate::class);
    }
}
