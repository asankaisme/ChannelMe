@extends('layouts.app')

@section('body-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        Diagnosis History of {{ $patient->fname }} {{ $patient->lname }}
                    </div>
                    {{-- <div class="card-body">
                        <div class="col">
                            <table id="myTable" class="table table-sm table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Diagnosis</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reportHistory as $report)
                                        <tr>
                                            <td>{{ $report->dgReport }}</td>
                                            <td>{{ $report->created_at }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        @include('shared.messages')
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
