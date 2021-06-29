@extends('layout.master')

@section('title', 'Update Pengambilan Barang')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Pengambilan Barang</h2>
        <a href="{{url('pengambilan-barang')}}" class="btn btn-danger">Back to home</a>
    </div>
</div>

<div class="container mt-3 p-3" style="height: 90%;">

    <div class="row">
        <div class="col">
            <div class="card mx-auto" style="width: 30rem;">
                <h2 class="card-title text-center my-3">Update Data</h2>
                <div class="card-body">
                    <form action="{{url('/pengambilan-barang/update', $data->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- input id order -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">ID Request Order</label>
                            <select name="id_request_order" id="" class="form-control">
                                @foreach($vendor as $key => $value)
                                <option value="{{$value->id}}" {{$value->id == $data->id_request_order ? 'selected' : '' }}>{{$value->id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- input id vendor -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Tanggal Pengambilan Barang</label>
                            <input type="date" class="form-control" name="tanggal_pengambilan_barang" value="{{$data->tanggal_pengambilan_barang}}" placeholder="Password">
                        </div>

                        <div class="form-group text-center mt-4 d-grid">
                            <button class="btn btn-success" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection