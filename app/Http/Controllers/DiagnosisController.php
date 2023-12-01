<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Patient;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function addDiagnosis($patientId){
        $patientDiagnosis = Patient::where('id', $patientId)->first();
        //$patientName = $patient
        return view('diagnoses.create', compact('patientDiagnosis'));
    }
    
    public function saveDiagnosisReport(Request $request, $patientId){
        $request->validate([
            'dgReport' => ['required', 'min:2', 'max:250']
        ]);
        $diagnosisReport = new Diagnosis();
        $diagnosisReport->patient_id = $patientId;
        $diagnosisReport->dgReport = $request->input('dgReport');
        $result = $diagnosisReport->save();
        if ($result != null) {
            return redirect()->route('issueDrugs', $patientId)->with('isSuccess', 'New diagnosis report added succefully.');
        } else {
            return redirect()->route('patients.index')->with('isFailed', 'Failed to add details!');
        }
    }

    public function viewHistory($patientId){
        if ($patientId != null) {
            $patient = Patient::where('id', $patientId)->first();
            $reportHistory = $patient->diagnosis;
            return view('patients.reportHistory', compact('patient','reportHistory'));   
        } else {
            return redirect()->route('patients.index');
        }
        
    }
}
