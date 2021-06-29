@extends('layout.master')

@section('title', 'Get Pengolahan Baku')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Pengolahan Baku</h2>
        <a href="{{route('createPengolahan')}}" class="btn btn-success">Create Pengolahan Baku</a>
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
                            <p class="font-weight-bold">Nomor ID Bahan Baku : {{$dt->id}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Nomor ID Vendor : {{$dt->id_vendor}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Jenis Bahan Baku : {{$dt->jenis_bahan_baku}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Nama Bahan Baku : {{$dt->nama_bahan_baku}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Harga Bahan Baku : Rp. {{number_format($dt->harga_bahan_baku,2,',','.')}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Jumlah Bahan Baku : {{$dt->jumlah_bahan_baku}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Total : Rp. {{number_format($dt->harga_bahan_baku*$dt->jumlah_bahan_baku,2,',','.')}} </p>
                        </div>
                    </div>

                    <div class="card-footer d-grid">
                        <a href="{{route('updatePengolahan', $dt->id)}}" class="btn btn-block btn-warning">Update</a>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</div>
@endsection