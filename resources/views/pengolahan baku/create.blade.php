@extends('layout.master')

@section('title', 'Post Pengolahan Baku')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Pengolahan Baku</h2>
        <a href="{{route('pengolahan')}}" class="btn btn-danger">Back to home</a>
    </div>
</div>

<div class="container mt-3 p-3" style="height: 90%;">

    <div class="row">
        <div class="col">
            <div class="card mx-auto" style="width: 30rem;">
                <h2 class="card-title text-center my-3">Create Data</h2>
                <div class="card-body">
                    <form action="{{route('createPengolahan')}}" method="POST">
                        @csrf
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
                            <label for="exampleInputenter here1">Jenis Bahan Baku</label>
                            <input type="text" class="form-control" name="jenis_bahan_baku" placeholder="Jenis Bahan Baku . .">
                        </div>
                        <!-- input nomor transaksi -->
                        <div class="form-group mb-3">
                            <label for="exampleInputenter here1">Nama Bahan Baku</label>
                            <input type="text" class="form-control" name="nama_bahan_baku" placeholder="Nama Bahan Baku . .">
                        </div>
                        <!-- input tanggal transaksi -->
                        <div class="form-group mb-3">
                            <label for="exampleInputenter here1">Harga Bahan Baku</label>
                            <input type="number" class="form-control" name="harga_bahan_baku" placeholder="Harga Bahan Baku . .">
                        </div>
                        <!-- input total harga -->
                        <div class="form-group mb-3">
                            <label for="exampleInputenter here1">Jumlah Bahan Baku</label>
                            <input type="number" class="form-control" name="jumlah_bahan_baku" placeholder="Jumlah Bahan Baku . .">
                        </div>

                        <div class="form-group text-center mt-4 d-grid">
                            <button class="btn btn-block btn-success" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection