<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="{{ asset ('bo/dist/css/bootstrap.min.css') }}" >    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: lightblue;
            }
    </style>
</head>
<body>
    @include('sweetalert::alert')
    <div id="app">
        <nav class="">
            <div class="container">
                <div class="row">
                    <div class="btn-group">
                        <a href="{{ url('/') }}"  class="btn btn-danger  btn-block"><i class="fas fa-arrow-alt-circle-left"></i><br> Welcome</a>
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
<!-- JS, Popper.js, and jQuery -->
<script src="{{ asset ('js/jquery-3.5.1.slim.min.js') }}"></script>
<script src="{{ asset ('js/popper.min.js') }}"></script>
<script src="{{ asset ('bo/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('js/all.min.js') }}"></script>
<script src="{{ asset ('select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset ('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('admin/dist/assets/demo/datatables-demo.js') }}"></script>
<script>
$(document).ready(function() {
    $('.select2').select2();
});
</script>
</html>
