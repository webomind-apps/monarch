<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon_path',
        'banner_path',
        'description',
        'long_description',
        'images',
        'banner_header'
    ];

    public function major_service(){
        return $this->belongsTo(MajorService::class);
    }
}
