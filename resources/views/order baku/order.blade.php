@extends('layout.master')

@section('title', 'Get Order Bahan Baku')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Order Bahan Baku</h2>
        <a href="{{url('/order/create')}}" class="btn btn-success">Request Order</a>
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
                            <p class="font-weight-bold">Nomor ID Request : {{$dt->id}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Nomor ID Vendor : {{$dt->id_vendor}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Nomor ID Bahan Baku : {{$dt->id_bahan_baku}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Nama Request : {{$dt->nama_request}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Jumlah Bahan Baku : {{$dt->jumlah_bahan_baku}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Harga : Rp. {{number_format($dt->harga,2,',','.')}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Total : Rp. {{number_format($dt->harga*$dt->jumlah_bahan_baku,2,',','.')}}</p>
                        </div>
                    </div>
                    <div class="card-footer d-grid">
                        <a href="{{url('order/update', $dt->id)}}" class="btn btn-block btn-warning">Update</a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection