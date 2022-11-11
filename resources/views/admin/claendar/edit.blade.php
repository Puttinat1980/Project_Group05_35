@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Calendar</h4>

                        <div class="basic-form">
                            <form method="POST" action="{{ url('/admin/calendar/update/'.$calendar->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label> Name </label>
                                    <input type="text" name="name" class="form-control input-default" value="{{ $calendar->name }}">
                                </div>
                                <div class="form-group">
                                    <label> Detail </label>
                                    <input type="text" name="detail" class="form-control input-default" value="{{ $calendar->detail }}">
                                </div>
                                <div class="form-group">
                                    <label> Image </label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>

                                <img src="{{ asset('backend/upload/calendar/'.$calendar->image) }}" width="100px" height="100px"> <br><br>
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
