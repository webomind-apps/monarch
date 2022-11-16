<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'promotion_id',
        'plans_id',
    ];

    public function promotion_plans()
    {
        return $this->belongsTo(Promotion::class);
    }

    
}
