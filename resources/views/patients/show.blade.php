@extends('layouts.app')

@section('body-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Personal Information of <span style="color:rgb(2, 71, 2); font-weight:bold;">{{ $patient->fname }} {{ $patient->lname }}</span>
                        <span style="float: right; color:rgb(2, 72, 2); font-weight:bold;">#{{ $patient->id }}</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control form-control-sm" id="fname" value="{{ $patient->fname }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control form-control-sm" id="lname" value="{{ $patient->lname }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="add1">Address Line 1</label>
                                    <input type="text" class="form-control form-control-sm" id="add1" value="{{ $patient->add1 }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="add2">Address Line 2</label>
                                    <input type="text" class="form-control form-control-sm" id="add2" value="{{ $patient->add2 }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="city">City/ Town</label>
                                    <input type="text" class="form-control form-control-sm" id="city" value="{{ $patient->city }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="birthday">Birth Date</label>
                                    <input type="date" class="form-control form-control-sm" id="birthday" value="{{ $patient->birthday }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    @if ($patient->gender == 1)
                                        <img src="{{ asset('svgs/male-svgrepo-com.svg') }}" alt="" height="30px" width="auto">
                                    @else
                                        <img src="{{ asset('svgs/female-mark-svgrepo-com.svg') }}" alt="" height="30px" width="auto">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="gender">Blood Group</label>
                                    <input type="text" class="form-control form-control-sm" id="birthday" value="{{ $patient->bloodGroup }}" readonly style="color:rgb(235, 82, 82);">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="add2">Mobile Number</label>
                                    <input type="text" class="form-control form-control-sm" id="add2" value="{{ $patient->mobile }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="city">Email</label>
                                    <input type="email" class="form-control form-control-sm" id="email" value="{{ $patient->email }}" readonly>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p style="color:rgb(68, 121, 235);">In the case of emergency, please contact,</p>
                        <div class="row">
                            <div class="col-md-8" style="color:rgb(68, 121, 235);">
                                <div class="form-group">
                                    <label for="add2">Contact Person</label>
                                    <input type="text" class="form-control form-control-sm" id="add2" value="{{ $patient->contactPerson }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="color:rgb(68, 121, 235);">
                                    <label for="city">Contact Number</label>
                                    <input type="email" class="form-control form-control-sm" id="email" value="{{ $patient->contMobile }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span style="float: right;">
                                    <a href="{{ route('patients.index') }}"><button type="button" class="btn btn-outline-dark btn-sm">Back</button></a>
                                    <a href="{{ route('patients.edit',  $patient->id) }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                    <a href="{{ route('diagnosis', $patient->id) }}"><button type="button" class="btn btn-success btn-sm">New Diagnosis</button></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('shared.messages')
        </div>
    </div>
@endsection
