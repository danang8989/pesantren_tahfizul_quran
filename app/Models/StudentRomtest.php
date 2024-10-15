<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRomtest extends Model
{
    use HasFactory;

    public function Romtest(){
        return $this->belongsTo(Romtest::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
