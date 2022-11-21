<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = [
        'question',
        'image',
        'answer',
        'option1',
        'option2',
        'option3',
        'option4',
        'type',
        'qtopic_id',
    ];
    public static function getQuestions(){
        $records = DB::table('questions')->select('id','question','image','answer','option1','option2','option3','option4','type','qtopic_id')->get()->toArray();
        return $records;
    }
    public function qtopic(){
        return $this->belongsTo(Qtopic::class);
    }
}
