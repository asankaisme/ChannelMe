<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <span style="float: right; font-weight:bold; color:rgb(2, 72, 2)">#{{ $patientId }}</span>
        </div>
        <div class="card-body">
            
            <form action="">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group" style="border: 1px;">
                                @foreach ($latestReports as $report)
                                    <p>{{ $report->dgReport }}</p>
                                @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
