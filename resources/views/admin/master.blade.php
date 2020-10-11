<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{ asset ('admin/dist/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <script src="{{ asset ('js/all.min.js') }}"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('sweetalert::alert')
        @include('admin.navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        @include('admin.sidebar')
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset ('js/jquery-3.5.1.slim.min.js') }}"></script>
        <script src="{{ asset ('bo/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{ asset ('admin/dist/js/scripts.js') }}"></script>
        <script src="{{ asset ('admin/dist/js/Chart.min.js') }}"></script>
        <script src="{{ asset ('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset ('js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset ('admin/dist/assets/demo/datatables-demo.js') }}"></script>
        @yield('script')
    </body>
</html>
