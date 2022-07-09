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
        'topic_id',
        'status',
    ];
}
