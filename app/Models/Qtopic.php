<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qtopic extends Model
{
    use HasFactory;
    public function qcategory(){
        return $this->belongsTo(Qcategory::class);
    }
}
