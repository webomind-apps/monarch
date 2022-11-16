<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinic_id',
        'video_path',  
    ];

    public function clinic(){
        return $this->belongsTo(Clinic::class);
    }
}
