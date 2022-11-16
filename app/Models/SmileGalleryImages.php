<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmileGalleryImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'smile_gallery_id',
        'images',
    ];
}
