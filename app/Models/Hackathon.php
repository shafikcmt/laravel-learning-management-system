<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hackathon extends Model
{
    use HasFactory;
    protected $table = 'hackathons';
    protected $fillable = [
        'course',
        'instructor_name',
        'from',
        'to',
        'organiged_by',
        'learning_type',
        'event',
        'total_hours',
        'certificate_id',
        'type_of_campus'
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
