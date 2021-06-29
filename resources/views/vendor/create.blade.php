@extends('layout.master')

@section('title', 'Post Vendor')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Vendor</h2>
        <a href="{{route('vendor')}}" class="btn btn-danger">Back to home</a>
    </div>
</div>

<div class="container mt-3 p-3" style="height: 90%;">

    <div class="row">
        <div class="col">
            <div class="card mx-auto" style="width: 30rem;">
                <h2 class="card-title text-center my-3">Create Data</h2>
                <div class="card-body">
                    <form action="{{route('createVendor')}}" method="post">
                    @csrf
                        <!-- input nama vendor -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Nama Vendor</label>
                            <input type="text" class="form-control" name="nama_vendor" placeholder="Nama Vendor . .">
                        </div>
                        <!-- input alamat vendor -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Alamat Vendor</label>
                            <input type="text" class="form-control" name="alamat_vendor" placeholder="Alamat Vendor . .">
                        </div>
                        <!-- input jenis vendor -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Jenis Vendor</label>
                            <input type="text" class="form-control" name="jenis_vendor" placeholder="Jenis Vendor . .">
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