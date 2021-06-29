@extends('layout.master')

@section('title', 'Get Anggaran Dana')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Anggaran Dana</h2>
        <a href="{{url('/dana/create')}}" class="btn btn-success">Create Anggaran</a>
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
                            <p class="font-weight-bold">Nomor ID Anggaran : {{$dt->id}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Nomor ID request order : {{$dt->id_request_order}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Tanggal Reuqest Order : {{date('d-m-Y', strtotime($dt->tanggal_request))}}</p>
                        </div>
                    </div>
                    <div class="card-footer d-grid">
                        <a href="{{url('dana/update', $dt->id)}}" class="btn btn-block btn-warning">Update</a>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</div>
@endsection