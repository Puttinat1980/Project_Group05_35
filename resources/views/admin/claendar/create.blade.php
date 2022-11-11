@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Calendar</h4>

                        <div class="basic-form">
                            <form method="POST" action="{{ route('calendar.insert') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label> Name </label>
                                    <input type="text" name="name" class="form-control input-default">
                                </div>
                                <div class="form-group">
                                    <label> Detail </label>
                                    <input type="text" name="detail" class="form-control input-default">
                                </div>
                                <div class="form-group">
                                    <label> Image </label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Save">
                                <a href="{{ route('calendar.index') }}" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
