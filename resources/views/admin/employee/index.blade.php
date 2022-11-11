@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Employee</h4>
                            
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employee as $user)
                                    <tr>
                                        <td>{{ $employee->firstItem()+$loop->index }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->address }}</td>
                                       
                                        <td class="color-primary">
                                            <a href="{{ url('admin/employee/edit/'.$user->id) }}" class="btn btn-warning">แก้ไข</a>
                                            @if (Auth::user()->name == $user->name)
                                            <div class="btn btn-secondary">ลบไม่ได้</div>          
                                            @else
                                            <a href="{{ url('admin/employee/delete/'.$user->id) }}" class="btn btn-danger">ลบ</a>       
                                            @endif
                                           
                                            
                                        </td>
                                    </tr>  
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                        {{ $employee->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
