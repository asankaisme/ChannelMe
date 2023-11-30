<div class="col-md-12" style="padding-top: 10px;">
    @if (session()->has('isSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('isSuccess') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session()->has('isFailed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('isFailed') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>