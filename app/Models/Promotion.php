<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'banner',
    ];

    public function promotions()
    {
        return $this->hasMany(PromotionPlan::class, 'promotion_id');
    }
}
