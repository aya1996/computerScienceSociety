<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $guarded = [];


    public function semester()
    {
        return $this->belongsTo(Semester::class,'semester_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }
}

