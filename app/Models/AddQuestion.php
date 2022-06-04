<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddQuestion extends Model
{
    use HasFactory;
    protected $table = 'add_questions';
    protected $fillable = [
        'question',
        'answer',
        'option1',
        'option2',
        'option3',
        'option4',
        'qtopic_id',
    ];
    public function qtopic(){
        return $this->belongsTo(Qtopic::class);
    }
}
