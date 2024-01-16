<div>
    <div class="card">
        <div class="card-header">
            Prescriptions to be issued
        </div>
        <div class="card-body">
            <div class="col">
                <table id="myTable" class="table table-sm table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Diagnosis ID</th>
                            <th>Patient Name</th>
                            <th>Status</th>
                            <th></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prescriptionsToBeIssued as $prescriptionToBeIssued)
                            <tr>
                                <td>{{ $prescriptionToBeIssued->diagnosis_id }}</td>
                                <td>{{ $prescriptionToBeIssued->diagnosis->patient->fname }} {{ $prescriptionToBeIssued->diagnosis->patient->lname }}</td>
                                <td>{{ $prescriptionToBeIssued->status }}</td>
                                <td>View</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
