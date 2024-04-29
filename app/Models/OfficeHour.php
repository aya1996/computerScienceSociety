<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeHour extends Model
{
    use HasFactory;

    protected $table = 'office_hours';
    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo(Admin::class,'teacher_id');
    }

}
