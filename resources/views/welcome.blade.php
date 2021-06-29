<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Procurement - Manufacture</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .card {
            height: 400px;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-primary p-5" style="background-image:url('https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1225&q=80'); background-repeat:no-repeat;background-size:cover;background-position:center center;">
        <h2 class="text-center text-white ">Procurement - Manufacture</h2>
        <div class="row mt-4">

            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='data:image/jpeg;base64,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' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Vendor</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/vendor')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('vendor')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://www.jurnal.id/wp-content/uploads/2020/02/shutterstock_1160095369.jpg' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Pengolahan Bahan Baku</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/pengolahan-baku')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('pengolahan')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://trial.accurate.id/wp-content/uploads/2020/02/Title-Menggunakan-Fitur-Pesanan-Pembelian-Untuk-Operasional-Bisnis-Anda.png' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Request Order Bahan Baku</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/order')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('order')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4">
            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='http://www.teropongsenayan.com/foto_berita/202004/09/medium_tscom_news_photo_1586414436.jpg' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Anggaran Dana</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/dana')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('dana')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://st3.depositphotos.com/1001877/19554/i/600/depositphotos_195540480-stock-photo-delivery-service-concept-hand-truck.jpg' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Request Pengambilan Barang</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/pengambilan-barang')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('pengambilan')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://www.nesabamedia.com/wp-content/uploads/2018/05/situs-jual-beli-online.jpg' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Transaksi</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/transaksi')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('transaksi')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>