<?php

namespace App\Models;

use App\Models\Drug;
use App\Models\Diagnosis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'drug_id',
        'diagnosis_id',
        'qtyIssued',
        'numberOfTimes',
    ];

    public function diagnosis(){
        return $this->belongsTo(Diagnosis::class);
    }

    public function drug(){
        return $this->belongsTo(Drug::class);
    }
}
