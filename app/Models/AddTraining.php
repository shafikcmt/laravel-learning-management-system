<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTraining extends Model
{
    use HasFactory;
    protected $table = "add_trainings";
    protected $fillable = [
        'course',
        'event',
        'instructor_name',
        'from',
        'to',
        'organiged_by',
        'course_completion',
        'place',
        'learning_type',
        'certificate_id',
        'type_of_campus',
    ];
}
