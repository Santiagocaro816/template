<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>test</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
@include('layouts.components.sidebar')
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    @include('layouts.components.navbar')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            @yield('content')
        </div>
    </div>
    @include('layouts.components.footer')
</div>

<script src="{{ url('js/app.js') }}"></script>
</body>
</html>
