<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: lightblue;
            }
    </style>
</head>
<body>
    @include('sweetalert::alert')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="row">
                    <div class="btn-group"  style="overflow-x:auto;">
                        <a href="{{ url('/') }}"  class="btn btn-danger  btn-block"><i class="fas fa-arrow-alt-circle-left"></i><br> Welcome</a>
                        <hr>
                        <a href="#"  class="btn btn-warning"><i class="fas fa-book"></i><br> Baca Buku</a>
                        <a href="{{ url ('/kirim-tugas') }}"  class="btn btn-primary"><i class="fas fa-chart-area"></i><br> Kirim Tugas</a>
                        <a href="{{ url ('/lihat-nilai') }}" class="btn btn-success"><i class="fas fa-heart"></i><br> Nilai</a>
                        <a href="{{ url ('/absen') }}" class="btn btn-info"><i class="fas fa-calendar-alt"></i><br> Absen</a>
                        <a href="{{ url ('login') }}" class="btn btn-secondary"><i class="fas fa-users-cog"></i><br> Masuk</a>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</html>
