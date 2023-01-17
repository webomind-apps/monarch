<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistartionForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'signature',
        
    ];

    public function clinic(){
        return $this->belongsTo(Clinic::class);
    }
}
