<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvantageTopList extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinic_id',
        'advantage_id',  
    ];

    public function clinic(){
        return $this->belongsTo(Clinic::class);
    }
}
