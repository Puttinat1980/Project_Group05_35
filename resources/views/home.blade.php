@extends('layouts.backend_master')
@section('content')
<div class="col-lg-3 col-sm-6">
    <div class="card gradient-1">
        <div class="card-body">
            <h3 class="card-title text-white">Products</h3>
            <div class="d-inline-block">
                <h2 class="text-white">{{ $product->count() }}</h2>
                <p class="text-white mb-0">รายการ</p>
            </div>
            <span class="float-right display-5 opacity-5"><i
                    class="fa fa-shopping-cart"></i></span>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card gradient-2">
        <div class="card-body">
            <h3 class="card-title text-white">Calendar</h3>
            <div class="d-inline-block">
                <h2 class="text-white">{{ $calendar->count() }}</h2>
                <p class="text-white mb-0">รายการ</p>
            </div>
            <span class="float-right display-5 opacity-5"><i class="fa fa-calendar"></i></span>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card gradient-3">
        <div class="card-body">
            <h3 class="card-title text-white">Employee</h3>
            <div class="d-inline-block">
                <h2 class="text-white">{{ $employee->count() }}</h2>
                <p class="text-white mb-0">รายการ</p>
            </div>
            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card gradient-4">
        <div class="card-body">
            <h3 class="card-title text-white">Working</h3>
            <div class="d-inline-block">
                <h2 class="text-white">{{ $working->count() }}</h2>
                <p class="text-white mb-0">รายการ</p>
            </div>
            <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
        </div>
    </div>
</div>
</div>


@endsection
