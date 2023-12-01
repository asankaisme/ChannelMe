@extends('layouts.app')
@section('body-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @livewire('IssueDrugs', ['patientId' => $patientId])
            </div>
        </div>
        @include('shared.messages')
    </div>
    
@endsection
