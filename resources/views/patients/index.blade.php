
@extends('layouts.app')



@section('body-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Manage Patient List
                </div>
                <div class="card-body">
                    <div class="col">
                        <table  id="myTable" class="table table-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>City</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->fname }}</td>
                                        <td>{{ $patient->lname }}</td>
                                        <td>{{ $patient->city }}</td>
                                        <td>
                                            <a href="{{ route('patients.show', $patient->id) }}"><img src="{{ asset('svgs/user-yellow-circle-20550.svg') }}" alt="imageOfMan" srcset="" height="25px" width="25px"></a>
                                            <a href="{{ route('patients.show', $patient->id) }}">Edit</a>
                                            <a href="{{ route('patients.show', $patient->id) }}">Delete</a>
                                            <a href="{{ route('patients.show', $patient->id) }}">New Diagnosis</a>
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

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    } );
</script>

@endsection
