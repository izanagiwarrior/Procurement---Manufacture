<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#card-slider', {
                perPage: 2,
                breakpoints: {
                    600: {
                        perPage: 1,
                    }
                }
            }).mount();
        });
</script>
</head>

<body style="height:120vh;">
    <div class="container-fluid bg-primary p-5" style="background-image:url('https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1225&q=80'); background-repeat:no-repeat; background-size:cover; background-position:center center;height:100%;">
        @yield('content')
    </div>
</body>

</html>