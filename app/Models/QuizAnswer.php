<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    use HasFactory;
    protected $table = 'quiz_answers';
    protected $fillable = [
        'student_id',
        'qtopic_id',
        '_id',
        'answer',
        'qanswer',
        'status',
    ];

}
