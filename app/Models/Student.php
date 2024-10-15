<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function studentFile(){
        return $this->hasMany(StudentFile::class);
    }

    public function studentParent(){
        return $this->hasMany(StudentParent::class);
    }

    public function studentRomtest(){
        return $this->hasMany(StudentRomtest::class);
    }

}
