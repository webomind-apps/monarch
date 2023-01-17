<?php

namespace App\Models;

use App\Mail\AdminMail as MailAdminMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class AdminMail extends Model
{
    use HasFactory;

    public $fillable = ['location'];
  
    
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
            
                
            $adminEmail = "surabhi@webomindapps.com";
            Mail::to($adminEmail)->send(new MailAdminMail($item));
        });
    }
}
