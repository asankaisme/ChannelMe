<?php

namespace App\Livewire;

use App\Models\Diagnosis;
use App\Models\Patient;
use Livewire\Component;

class IssueDrugs extends Component
{
    public $patientId;

    public function render()
    {
        $latestReports = Patient::where('id', $this->patientId)->first()->diagnosis;

        return view('livewire.issue-drugs', compact('latestReports'));
    }
}
