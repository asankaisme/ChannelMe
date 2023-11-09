<?php

namespace App\Models;

use App\Models\Prescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = [
        'drugName',
        'quantity',
        'rol',
        'isActive',
    ];

    public function prescription(){
        return $this->hasMany(Prescription::class);
    }
}
