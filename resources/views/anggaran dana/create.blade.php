@extends('layout.master')

@section('title', 'Post Anggaran Dana')

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
                <h2 class="card-title text-center my-3">Create Data</h2>
                <div class="card-body">
                <form action="{{route('createDana')}}" method="POST">
                    @csrf
                        <!-- input id vendor -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">ID Request Order</label>
                            <select name="id_request_order" id="" class="form-control">
                                @foreach($order as $vd)
                                <option value="{{$vd->id}}">{{$vd->id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- input nomor resi -->
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Tanggal Request</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_request">
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