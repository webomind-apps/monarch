<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorService extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner',
        'banner_header',
        'description',
        'description',
        'image',
    ];

    public function services()
    {
        return $this->hasMany(ServiceForMajorService::class, 'major_service_id');
    }
}
