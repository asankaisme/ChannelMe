<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Diagnosis;
use Illuminate\Http\Request;
use App\Models\Drug;

class PrescriptionController extends Controller
{
    //show prescription form
    public function showPrescription(Diagnosis $diagnosis)
    {
        $drugs = Drug::where('isActive', 1)->get();
        return view('issueDrugs.issuePage', compact('drugs', 'diagnosis'));
    }
}
