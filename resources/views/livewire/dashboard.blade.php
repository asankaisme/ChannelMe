<div>
    <div class="row">
        @if (count($result) != null)
            <div class="col-md-4">
                <div class="card bg-warning" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('imgs/mediTablets.png') }}" alt="Card image cap">
                    <div class="card-body">
                        @if (count($result) == 1)
                            <p class="card-text">{{ count($result) }} item is running low. Please manage your stocks.</p>
                        @else
                            <p class="card-text">{{ count($result) }} items are running low. Please manage your stocks.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        @endif
        <div class="col-md-4">
            <div class="card bg-info" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('imgs/pharmacy.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    @if ($toIssue->count() > 1)
                        <p class="card-text">{{ $toIssue->count() }} prescriptions are waiting to be issued.</p>
                    @else
                        <p class="card-text">{{ $toIssue->count() }} prescription is waiting to be issued.</p>
                    @endif
                </div>
                {{-- <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                </ul> --}}
            </div>
        </div>
    </div>
    {{-- <p>Dashboard component</p>
    <ul>
        @foreach ($result as $res)
            <li>{{ $res['medicineName'] }} | {{ $res['remainder'] }}</li>
        @endforeach
    </ul> --}}
</div>
