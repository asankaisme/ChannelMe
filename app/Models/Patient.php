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

    public function diagnosis(){
        return $this->hasMany(Diagnosis::class);
    }
}
