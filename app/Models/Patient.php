<?php

namespace App\Models;

use App\Models\Diagnosis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'birthday',
        'age',
        'gender',
        'add1',
        'add2',
        'city',
        'mobile',
        'email',
        'contactPerson',
        'contMobile',
        'bloodGroup',
        'isActive',
    ];

    public function diagnosis()
    {
        return $this->hasMany(Diagnosis::class);
    }

    public function latestDiagnosis()
    {
        return $this->hasOne(Diagnosis::class)->latest();
    }

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }
}
