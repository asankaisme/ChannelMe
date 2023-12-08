<?php

namespace App\Livewire;

use App\Models\Drug;
use App\Models\Patient;
use App\Models\Prescription;
use Livewire\Component;

class IssueDrugs extends Component
{
    public $patientId;
    public $drgId;
    public $qtyIssued;
    public $remarks ="";
    ///public $diagnosis_id;

    public function addDrugToThePrescription(){
        $drgIssued = Drug::where('id', $this->drgId)->first();
        $diagnosis_id_new = Patient::where('id', $this->patientId)->first()->latestDiagnosis->id;
        if($drgIssued->id != null){
            $avlDrgQty = $drgIssued->quantity;
            if($avlDrgQty > $this->qtyIssued){
                // add new entry to the prescription table
                $newPrescription = new Prescription();
                $newPrescription->drug_id = $this->drgId;
                $newPrescription->diagnosis_id = $diagnosis_id_new;
                $newPrescription->qtyIssued = $this->qtyIssued;
                $newPrescription->remarks = $this->remarks;
                $newPrescription->save();
                // update drugs table
                $updatedDrgs = new Drug();
                $updatedDrgs->quantity = $avlDrgQty - $this->qtyIssued;
                $updatedDrgs->update();
                return redirect()->route('issueDrugs', $this->patientId);
            }else{
                return redirect()->route('issueDrugs', $this->patientId);
            }
        }
    }

    public function render()
    {
        $patient = Patient::where('id', $this->patientId)->first();
        $latestReports = $patient->latestDiagnosis;
        $drgsAvailable = Drug::where('isActive', 1)->get();
        //dd($drgsAvailable);
        $relatedPrescription = Prescription::where('diagnosis_id', $latestReports->id)->get();
        return view('livewire.issue-drugs', compact('patient','latestReports', 'drgsAvailable', 'relatedPrescription'));
    }
}
