<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_id',
        'name',
        'phone_number',
        'fax_number',
        'email',
        'admin_email',
        'address',
        'office_hours',
        'map_link',
        'google_review_link',
        'banner',
        'video_link',
        'description',
        'appointment_note',
        'covid_update',
    ];

    public function services(){
        return $this->hasMany(ClinicService::class,'clinic_id');
    }

    public function plans(){
        return $this->hasMany(ClinicPlan::class,'clinic_id');
    }

    public function advantages(){
        return $this->hasMany(ClinicAdvantage::class,'clinic_id');
    }
    public function advantagesToList(){
        return $this->hasMany(AdvantageTopList::class,'clinic_id');
    }
    public function images(){
        return $this->hasMany(ClinicGallery::class,'clinic_id');
    }
    public function videos(){
        return $this->hasMany(ClinicVideo::class,'clinic_id');
    }
    //for book an appointment
    public function enquiries(){
        return $this->hasMany(Enquiry::class,'clinic_id');
    }
    //for contact us
    public function queries(){
        return $this->hasMany(Query::class,'clinic_id');
    }
    //for career
    public function career(){
        return $this->hasMany(Career::class,'clinic_id');
    }
    //for registration
    public function registration(){
        return $this->hasMany(RegistartionForm::class,'clinic_id');
    }
   
}
