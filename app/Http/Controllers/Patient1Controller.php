<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::where('isActive', 1)->get();
        return view('patients.index', compact('patients'));
    }
}
