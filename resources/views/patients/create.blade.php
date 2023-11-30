@extends('layouts.app')

@section('body-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add Personal Information <span style="color:rgb(2, 71, 2); font-weight:bold;"></span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('patients.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control form-control-sm" name="fname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control form-control-sm" name="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="add1">Address Line 1</label>
                                        <input type="text" class="form-control form-control-sm" name="add1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="add2">Address Line 2</label>
                                        <input type="text" class="form-control form-control-sm" name="add2">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="city">City/ Town</label>
                                        <input type="text" class="form-control form-control-sm" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="birthday">Birth Date</label>
                                        <input type="date" class="form-control form-control-sm" name="birthday">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="age">Age(Yrs)</label>
                                        <input type="number" class="form-control form-control-sm" name="age"  min="0" max="110">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="birthday">Gender</label>
                                        <select name="gender" id="gender" class="form-control form-control-sm">
                                            <option value="" selected>--</option>
                                            <option value="1">M</option>
                                            <option value="2">F</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="gender">Blood Group</label>
                                        <select name="bloodGroup" id="bloodGroup" class="form-control form-control-sm">
                                            <option value="" selected>-Please Select-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="tel" class="form-control form-control-sm" name="mobile" >
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control form-control-sm" name="email">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p style="color:rgb(68, 121, 235);">In the case of emergency, please contact,</p>
                            <div class="row">
                                <div class="col-md-8" style="color:rgb(68, 121, 235);">
                                    <div class="form-group">
                                        <label for="contactPerson">Contact Person</label>
                                        <input type="text" class="form-control form-control-sm" name="contactPerson">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="color:rgb(68, 121, 235);">
                                        <label for="contMobile">Contact Number</label>
                                        <input type="tel" class="form-control form-control-sm" name="contMobile" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span style="float: right;">
                                        <a href="{{ route('patients.index') }}"><button type="button"
                                                class="btn btn-outline-dark btn-sm">Back</button></a>
                                                <input type="reset" value="Reset" class="btn btn-outline-info btn-sm">
                                        <input type="submit" value="Add Record" class="btn btn-primary btn-sm">
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="col" style="padding-top: 10px;">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ $error }} <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
