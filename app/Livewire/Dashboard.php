<?php

namespace App\Livewire;

use App\Models\Drug;
use App\Models\Prescription;
use Livewire\Component;

class Dashboard extends Component
{
    //public $res = [];

    public function calculateRemainder(){
        $drugCollection = Drug::where('isActive', 1)->get();
        $res = [];
        foreach($drugCollection as $drug){
            $remaingBal = ($drug->quantity)-($drug->rol);
            if($remaingBal < 20){
                $res[] = [
                    'medicineName' => $drug->drugName,
                    'remainder' => $remaingBal,
                ];
            }
        }
        return $res;
    }

    public function render()
    {
        $result = $this->calculateRemainder();
        $toIssue = Prescription::where('status', 'start_issuing')->get();
        return view('livewire.dashboard', compact('result', 'toIssue'));
    }
}
