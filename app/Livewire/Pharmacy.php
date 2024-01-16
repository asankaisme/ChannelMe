<?php

namespace App\Livewire;

use App\Models\Prescription;
use Livewire\Component;

class Pharmacy extends Component
{
    public function render()
    {
        $prescriptionsToBeIssued = Prescription::where('status', 'start_issuing')->groupBy('diagnosis_id')->get();
        return view('livewire.pharmacy', compact('prescriptionsToBeIssued'));
    }
}
