<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            {{ $patient->fname }} {{ $patient->lname }} - Prescription
            <span style="float: right;">Diagnosis Report No:<span style="font-weight:bold; color:rgb(2, 72, 2)">
                    #{{ $latestReports->id }}</span></span>
        </div>
        <input type="hidden" wire:model="diagnosis_id" name="diagnosis_id" value="{{ $latestReports->id }}">
        <div class="card-body">
            <form action="" wire:submit.prevent="addDrugToThePrescription">
                <div class="row">
                    <div class="col-md-3" style="background-color:rgb(216, 255, 228);">
                        <div class="form-group" style="border: 1px;">
                            <p>{{ $latestReports->dgReport }} <br> <span
                                    style="font-size:small; color:rgb(216, 211, 211);">#Diagnosis No:
                                    {{ $latestReports->id }} </span>
                                <span
                                    style="font-size:small; color:gray;">{{ \Carbon\Carbon::parse($latestReports->created_at)->diffForHumans() }}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="qtyIssued">Drug Name</label>
                            <select wire:model="drgId" name="drgId" id="drgId"
                                class="form-control form-control-sm">
                                <option value=null>-Please Select-</option>
                                @foreach ($drgsAvailable as $drug)
                                    <option value="{{ $drug->id }}" name="drgId">{{ $drug->drugName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="qtyIssued">Issue</label>
                            <input type="number" wire:model="qtyIssued" name="qtyIssued" id="qtyIssued"
                                class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="remarks">Remarks</label>
                            <input type="text" name="remarks" id="remarks" wire:model="remarks"
                                class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <input type="submit" value="Add" class="btn btn-sm btn-outline-success" style="margin-top: 30px;">
                    </div>
                </div>
            </form>
            <hr>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if ($relatedPrescription->count() != null)
                    <p style="color:rgb(2, 72, 2);">-Medicine to be dispensed-</p>
                        <table class="tbl tbl-sm table-striped table-hover">
                            <tbody>
                                <tr style="font-weight: bold; color:rgb(2, 72, 2)">
                                    <td style="width: 200px;">Name</td>
                                    <td style="width: 130px;">Quantity</td>
                                    <td style="width: 100px;">Guide</td>
                                    <td style="width: auto;"></td>
                                </tr>
                                @foreach ($relatedPrescription as $prescription)
                                    <tr>
                                        <td style="width: 210px;">{{ $prescription->drug->drugName }}</td>
                                        <td style="width: 160px;">{{ $prescription->qtyIssued }}</td>
                                        <td style="width: 130px;">{{ $prescription->remarks }}</td>
                                        <td style="width: auto;"></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row" style="float:right; margin-top:10px;">
                            <form action="">
                                <input type="hidden" wire:model="diagnosis_id" value="{{ $latestReports->id }}">
                                <input type="submit" value="Send to Pharmacy" class="btn btn-sm btn-outline-success">
                            </form>
                        </div>
                    @else
                        <p style="text-align:center; color:rgb(2, 72, 2);">No drug issued. Start issuing!</p>
                    @endif
                </div>
                
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</div>
