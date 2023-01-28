<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolStudent extends Model
{
    use HasFactory;
    protected $table = 'school_students';
    protected $fillable = [
        'name',
        'email',
        'password',
        'contact_num',
        'school_name',
    ];
    public function quizattempt(){
        return $this->hasMany(AttemptsSchoolQuiz::class);
    }
}
