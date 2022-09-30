<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalSkills extends Model
{
    use HasFactory;
    protected $table = "technical_skills";
    protected $filable = [
        'id',
        'name'
    ];

}
