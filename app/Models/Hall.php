<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $table = 'halls';
    protected $guarded = [];


    public function building()
    {
        return $this->belongsTo(Building::class,'building_id');
    }
    public function level()
    {
        return $this->belongsTo(Level::class,'level_id');
    }
}
