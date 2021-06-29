@extends('layout.master')

@section('title', 'Update Anggaran Dana')

@section('content')
<div class="row">
    <div class="col text-center">
        <h2 class="text-center text-white">Anggaran Dana</h2>
        <a href="{{url('/dana')}}" class="btn btn-danger">Back to home</a>
    </div>
</div>

<div class="container mt-3 p-3" style="height: 90%;">

    <div class="row">
        <div class="col">
            <div class="card mx-auto" style="width: 30rem;">
                <h2 class="card-title text-center my-3">Update Data</h2>
                <div class="card-body">
                <form action="{{route('updateDana', $data->id)}}" method="POST">
                    @csrf
                    @method("PUT")
                        <!-- input id vendor -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">ID Request Order</label>
                            <select name="id_vendor" id="" class="form-control">
                                @foreach($vendor as $key => $value)
                                <option value="{{$value->id}}" {{$value->id == $data->id_vendor ? 'selected' : '' }}>{{$value->id}}</option>
                                @endforeach
                            </select>

                        </div>
                        <!-- input nomor resi -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Tanggal Request</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_request" value="{{$data->tanggal_request}}">
                        </div>

                        <div class="form-group text-center mt-4 d-grid">
                            <button class="btn btn-block btn-success" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection