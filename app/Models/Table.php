<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $table = 'tables';
    protected $guarded = [];


    public function college()
    {
        return $this->belongsTo(College::class,'college_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Admin::class,'teacher_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
