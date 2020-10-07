<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">SDN KIARA</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <p></p>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <div class="row">
                    <div class="col-md-12">
                        <p class="dropdown-item" href="#">{{Auth::user()->name}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn-warning btn-sm" href="{{ url ('/') }}">Welcome</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-danger btn-sm" href="{{ url ('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>