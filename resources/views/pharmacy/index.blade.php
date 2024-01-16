@extends('layouts.app')
@section('body-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @livewire('pharmacy')
            </div>
        </div>
        @include('shared.messages')
    </div>
    
@endsection
