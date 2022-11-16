<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinic_id',
        'path',  
    ];

    public function clinic(){
        return $this->belongsTo(Clinic::class);
    }
}
