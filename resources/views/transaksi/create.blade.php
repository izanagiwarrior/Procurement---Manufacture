@extends('layout.master')

@section('title', 'Post transaksi')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Transaksi</h2>
        <a href="{{route('transaksi')}}" class="btn btn-danger">Back to home</a>
    </div>
</div>

<div class="container mt-3 p-3" style="height: 90%;">

    <div class="row">
        <div class="col">
            <div class="card mx-auto" style="width: 30rem;">
                <h2 class="card-title text-center my-3">Create Data</h2>
                <div class="card-body">
                    <form action="{{route('createTransaksi')}}" method="post">
                        @csrf
                        <!-- input id order -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">ID Request Order</label>
                            <select name="id_request_order" id="" class="form-control">
                                @foreach($order as $vd)
                                <option value="{{$vd->id}}">{{$vd->id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- input id vendor -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">ID Vendor</label>
                            <select name="id_vendor" id="" class="form-control">
                                @foreach($vendor as $vd)
                                <option value="{{$vd->id}}">{{$vd->id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- input nomor resi -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Nomor Resi</label>
                            <input type="text" class="form-control" name="nomor_resi" placeholder="Nomor Resi . .">
                        </div>
                        <!-- input nomor transaksi -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Nama Transaksi</label>
                            <input type="text" class="form-control" name="nama_transaksi" placeholder="Nomor Transaksi . .">
                        </div>
                        <!-- input tanggal transaksi -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" placeholder="Tanggal Transaksi . .">
                        </div>
                        <!-- input total harga -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Total Harga</label>
                            <input type="number" class="form-control" name="total_harga" placeholder="Total Harga . .">
                        </div>

                        <div class="form-group text-center mt-4 d-grid">
                            <button class="btn btn-success" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection