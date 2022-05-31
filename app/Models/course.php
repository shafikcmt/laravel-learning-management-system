<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'category_id',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
