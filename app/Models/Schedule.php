<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedules';
    protected $guarded = [];


    public function college()
    {
        return $this->belongsTo(College::class,'college_id');
    }
    public function hall()
    {
        return $this->belongsTo(Hall::class,'hall_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class,'semester_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Admin::class,'teacher_id');
    }
}

