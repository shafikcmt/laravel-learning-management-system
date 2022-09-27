<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCertificate extends Model
{
    use HasFactory;
    protected $table = 'add_certificates';
    protected $fillable = [
        'certificate_name',
        'certificate_from',
        'instructor_name',
        'score',
        'year_of_pass',
        'test_center_name',
        'certificate_id',
        'type_of_campus',
    ];
}
