<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
    public static function getQuestions(){
        $records = DB::table('add_questions')->select('id','question','answer','option1','option2','option3','option4','qtopic_id')->get()->toArray();
        return $records;
    }
    public function qtopic(){
        return $this->belongsTo(Qtopic::class);
    }
}
