@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Product</h4>
                            <p class="mt-4"><a href="{{ route('pro.create') }}" class="btn btn-success">Create Product</a></p>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Detail</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pro as $product)
                                    <tr>
                                        <td>{{ $pro->firstItem()+$loop->index }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->detail }}</td>
                                        <td>
                                            <img src="{{ asset('backend/upload/product/'.$product->image) }}" width="100px" height="100px">
                                        </td>
                                        <td class="color-primary">
                                            <a href="{{ url('admin/product/edit/'.$product->id) }}" class="btn btn-warning">แก้ไข</a>
                                            <a href="{{ url('admin/product/del/'.$product->id) }}" class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>  
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                        {{ $pro->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
