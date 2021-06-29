@extends('layout.master')

@section('title', 'Get Vendor')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Vendor</h2>
        <a href="{{url('vendor/create')}}" class="btn btn-success">Update Vendor</a>
        <a href="{{url('/')}}" class="btn btn-danger">Back to home</a>
    </div>
</div>

<div class="container mt-3 p-3 splide d-flex justify-content-center align-items-center" id="card-slider" style="height: 90%;">

    <div class="splide__track w-75">
        <ul class="splide__list">
        @foreach($data as $dt)
            <li class="splide__slide">
                <div class="card splide__slide" style="width:25rem; margin:0 5px;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">ID Vendor : {{$dt->id}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Nama Vendor : {{$dt->nama_vendor}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Alamat Vendor : {{$dt->alamat_vendor}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Jenis Vendor : {{$dt->jenis_vendor}}</p>
                        </div>
                    </div>
                    <div class="card-footer d-grid">
                        <a href="{{url('vendor/update', $dt->id)}}" class="btn btn-block btn-warning">Update</a>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</div>
@endsection