<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attempt_quiz extends Model
{
    use HasFactory;
    protected $table = 'attempt_quizzes';
    protected $fillable = [
        'student_id',
        'student_name',
        'student_roll',
        'student_class',
        'student_branch',
        'student_semester',
        'topic_mobile',
        'topic_email',
        'topic_id',
        'right_ans',
        'wrong_ans',
        'perchantage',
        'status',
    ];
}
