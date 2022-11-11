@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Calendar</h4>
                            <p class="mt-4"><a href="{{ route('calendar.create') }}" class="btn btn-success">Create Calendar</a></p>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>User</th>
                                        <th>Detail</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            @foreach ($calendar as $cal)
                                 <tr>
                                    <td>{{ $calendar->firstItem()+$loop->index }}</td>
                                    <td>{{ $cal->name }}</td>
                                    <td>{{ $cal->user->name }}</td>
                                    <td>{{ $cal->detail }}</td>
                                    <td> <img src="{{ asset('backend/upload/calendar/'.$cal->image) }}" width="100px" height="100px"></td>

                                    <td class="color-primary">
                                    <a href="{{ url('/admin/calendar/edit/'.$cal->id) }}" class="btn btn-warning">แก้ไข</a>
                                    <a href="{{ url('/admin/calendar/delete/'.$cal->id) }}" class="btn btn-danger">ลบ</a>
                                    </td>
                                </tr>      
                           @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        {{ $calendar->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
