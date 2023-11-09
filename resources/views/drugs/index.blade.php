
@extends('layouts.app')



@section('body-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Manage Drugs List
                </div>
                <div class="card-body">
                    <div class="row">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>Drug Name</td>
                                    <td>Available Quantity</td>
                                    <td>Re-order Quantity</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($drugs as $drug)
                                    <tr>
                                        <td>{{ $drug->drugName }}</td>
                                        <td>{{ $drug->quantity }}</td>
                                        <td>{{ $drug->rol }}</td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
