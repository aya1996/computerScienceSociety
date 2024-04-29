<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $table = 'tables';
    protected $guarded = [];


    public function building()
    {
        return $this->belongsTo(Building::class,'building_id');
    }
    public function level()
    {
        return $this->belongsTo(Level::class,'level_id');
    }
    public function hall()
    {
        return $this->belongsTo(Hall::class,'hall_id');
    }
    public function officeHour()
    {
        return $this->belongsTo(OfficeHour::class,'officeHours_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Admin::class,'teacher_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
