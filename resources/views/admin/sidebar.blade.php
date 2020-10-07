<div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="{{ url ('dashboard')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
        </a>
        <div class="sb-sidenav-menu-heading">Transaction</div>
        
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Kegiatan Kesiswaan
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ url ('dashboard/data_tugas')}}">Tugas</a>
                <a class="nav-link" href="{{ url ('dashboard/nilai') }}">Nilai</a>
                <a class="nav-link" href="">Absensi</a>
            </nav>
        </div>
        <div class="sb-sidenav-menu-heading">Master Data</div>
        <a class="nav-link" href="{{ url('dashboard/kategori') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Mata Pelajaran
        </a>
        <a class="nav-link" href="{{ url ('dashboard/data_murid')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Data Murid
        </a>
        <a class="nav-link" href="{{ url ('dashboard/data_guru')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Data Guru
        </a>
    </div>