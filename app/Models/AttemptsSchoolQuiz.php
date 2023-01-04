<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttemptsSchoolQuiz extends Model
{
    use HasFactory;
    protected $table = 'attempts_school_quizzes';
    protected $fillable = [
        'stu_id',
        'topic_name',
        'topic_id',
        'right_ans',
        'wrong_ans',
        'perchantage',
        'status',
    ];

    public function schoolstudent(){
        return $this->belongsTo(SchoolStudent::class);
    }
}
