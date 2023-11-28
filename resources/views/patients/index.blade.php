
@extends('layouts.app')



@section('body-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Manage Patient List
                    <span style="float: right;"><a href="{{ route('patients.create') }}" title="Add a new patient"><img src="{{ asset('svgs/add-circle-svgrepo-com.svg') }}" alt="" height="40px" width="auto"></a></span>
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
                                            <a href="{{ route('patients.show', $patient->id) }}" title="Patient Details">
                                                @if ($patient->gender == 1)
                                                    <img src="{{ asset('svgs/male-svgrepo-com.svg') }}" alt="" height="30px" width="auto">
                                                @else
                                                    <img src="{{ asset('svgs/female-mark-svgrepo-com.svg') }}" alt="" height="30px" width="auto">
                                                @endif
                                            </a>
                                            <a href="{{ route('patients.show', $patient->id) }}" title="Add a diagnosis"><img src="{{ asset('svgs/web-page-menu-button-blue-circle-20566.svg') }}" alt="" height="25px" width="25px"></a>
                                            <a href="" title="Show Old Records"><img src="{{ asset('svgs/diagnosis-svgrepo-com.svg') }}" alt="diagnosisReport" height="25px" width="25px"></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                @if (session()->flash('isSuccess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->flash('isSuccess') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
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
