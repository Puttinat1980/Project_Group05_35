@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Working</h4>
                            <p class="mt-4"><a href="{{ route('working.create') }}" class="btn btn-success">Create Working</a></p>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>User</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                           
                                 @foreach ($working as $work)
                                 <tr>
                                        <td>{{ $working->firstItem()+$loop->index }}</td>
                                        <td>{{ $work->name }}</td>
                                        <td>{{ $work->user->name }}</td>
                                        <td> <img src="{{ asset('backend/upload/working/'.$work->image) }}" width="100px" height="100px"></td>
                                        <td class="color-primary">
                                        <a href="{{ url('/admin/working/edit/'.$work->id) }}" class="btn btn-warning">แก้ไข</a>
                                        <a href="{{ url('/admin/working/delete/'.$work->id) }}" class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>          
                                 @endforeach      
                      
                                    
                                </tbody>
                            </table>
                        </div>
                        {{  $working->links('pagination::bootstrap-5')  }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
