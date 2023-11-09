<?php

namespace App\Models;

use App\Models\Drug;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diagnosis extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'dgReport',
        'isActive',
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function prescription(){
        return $this->hasOne(Prescription::class);
    }

    
}
