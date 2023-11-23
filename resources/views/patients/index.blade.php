
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>City</th>
                                    <th>Blood Group</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->fname }}</td>
                                        <td>{{ $patient->lname }}</td>
                                        <td>{{ $patient->city }}</td>
                                        <td>{{ $patient->bloodGroup }}</td>
                                        <td>
                                            <a href="{{ route('patients.show', $patient->id) }}" title="Patient Details"><img src="{{ asset('svgs/user-yellow-circle-20550.svg') }}" alt="imageOfMan" srcset="" height="25px" width="25px"></a>
                                            {{-- <a href="{{ route('patients.show', $patient->id) }}"><img src="{{ asset('svgs/pencil-writing-blue-circle-20625.svg') }}" alt="pencil.svg" height="25px" width="25px"></a> --}}
                                            {{-- <a href="{{ route('patients.show', $patient->id) }}"><img src="{{ asset('svgs/trash-bin-red-circle-button-20567.svg') }}" alt="" height="25px" width="25px" srcset=""></a> --}}
                                            <a href="{{ route('patients.show', $patient->id) }}" title="Add a diagnosis"><img src="{{ asset('svgs/web-page-menu-button-blue-circle-20566.svg') }}" alt="" height="25px" width="25px"></a>
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
