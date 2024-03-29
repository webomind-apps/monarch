<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner',
        'title',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ]; 

}
