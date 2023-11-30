@extends('layouts.app')

@section('body-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Diagnonsis Report of <span
                            style="font-weight: bold; color:rgb(2,72,2)">{{ $patientDiagnosis->fname }}
                            {{ $patientDiagnosis->lname }}</span>
                            <span style="float: right; color:rgb(2, 72, 2); font-weight:bold;">#{{ $patientDiagnosis->id }}</span>
                    </div>
                    <div class="card-body">
                        <div class="row" style="font-size: small;">
                            <div class="col-md-2" style="text-align: right;">
                                Age
                            </div>
                            <div class="col-md-10" style="color:rgb(8, 8, 85)">
                                @if ($patientDiagnosis->age == null)
                                    Not mentioned
                                @else
                                    {{ $patientDiagnosis->age }}
                                @endif
                            </div>
                        </div>
                        <div class="row" style="font-size: small;">
                            <div class="col-md-2" style="text-align: right;">
                                Blood Group
                            </div>
                            <div class="col-md-10" style="color:rgb(211, 21, 21)">
                                @if ($patientDiagnosis->bloodGroup == null)
                                    Not mentioned
                                @else
                                    {{ $patientDiagnosis->bloodGroup }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
                <div class="card" style="border-color: green">
                    {{-- <div class="card-header">
                        Add Diagnosis Report
                    </div> --}}
                    <div class="card-body">
                        <form action="{{ route('diagnosis', $patientDiagnosis->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="dgReport">Diagnosis Report</label>
                                <textarea name="dgReport" id="dgReport" cols="138" rows="10" class="form-control form-control-sm"></textarea>
                            </div>
                            <div class="col" style="padding-top: 10px;">
                                <span style="float: right;">
                                    <input type="reset" value="Clear" class="btn btn-sm btn-outline-info">
                                    <input type="submit" value="Add Report" class="btn btn-primary btn-sm">
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @extends('shared.messages')
    </div>
@endsection
