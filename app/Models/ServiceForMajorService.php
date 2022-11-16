<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceForMajorService extends Model
{
    use HasFactory;
    protected $fillable = [
        'minor_service_id',
        'major_service_id',
    ];

    public function minor_services()
    {
        return $this->belongsTo(MajorService::class);
    }
}

