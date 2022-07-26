<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseBatch extends Model
{
    use HasFactory;
    protected $table = 'course_batches';
    protected $fillable = [
        'course_id',
        'batch_id',
    ];
}
