<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qcategory extends Model
{
    use HasFactory;
    protected $table = 'qcategories';
    protected $fillable = [
        'category_name',
    ];
    public function qtopic(){
        return $this->hasMany(Qtopic::class);
        
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
}

