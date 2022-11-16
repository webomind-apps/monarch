<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinic_id',
        'plan_id',
    ];

    public function clinic(){
        return $this->belongsTo(Clinic::class);
    }
}
