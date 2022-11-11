@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Employee</h4>

                        <div class="basic-form">
                            <form method="POST" action="{{ url('admin/employee/update/'.$employee->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label> Name </label>
                                    <input type="text" name="name" class="form-control input-default" value="{{ $employee->name }}">
                                </div>
                                <div class="form-group">
                                    <label> Email </label>
                                    <input type="text" name="email" class="form-control input-default"value="{{ $employee->email }}">
                                </div>
                                <div class="form-group">
                                    <label> Phone </label>
                                    <input type="text" name="phone" class="form-control input-default" value="{{ $employee->phone }}">
                                </div>
                                <div class="form-group">
                                    <label> Address </label>
                                    <input type="text" name="address" class="form-control input-default" value="{{ $employee->address }}">
                                </div>
                               
                                <input type="submit" class="btn btn-primary" value="Save">
                                <a href="{{ route('employee.index') }}" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
