<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qtopic extends Model
{
    use HasFactory;
    protected $table = 'qtopics';
    protected $fillable = [
        'topic_name',
        'total_question',
        'total_time',
    ];
    public function qcategory(){
        return $this->belongsTo(Qcategory::class);
    }
    public function addquestion(){
        return $this->hasMany(AddQuestion::class);
    }

}


