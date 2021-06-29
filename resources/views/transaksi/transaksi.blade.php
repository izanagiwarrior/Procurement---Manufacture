@extends('layout.master')

@section('title', 'Get transaksi')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Transaksi</h2>
        <a href="{{route('createTransaksi')}}" class="btn btn-success">Create Transaksi</a>
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
                            <p class="font-weight-bold">ID Transaksi : {{$dt->id}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">ID Request Order : {{$dt->id_request_order}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">ID Vendor : {{$dt->id_vendor}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Nomor Resi : {{$dt->nomor_resi}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Nama Transaksi : {{$dt->nama_transaksi}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Tanggal Transaksi : {{$dt->tanggal_transaksi}}</p>
                        </div>
                    </div>
                    <div class="card-footer d-grid">
                        <a href="{{route('updateView', $dt->id)}}" class="btn btn-block btn-warning">Update</a>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</div>
@endsection