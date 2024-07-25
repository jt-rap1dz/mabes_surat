<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{ url('dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    @if (Auth::user()->role =='admin')
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Master Data
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ url('personel') }}">Personel</a>
                            <a class="nav-link" href="{{ url('tugas') }}">Tugas</a>
                            <a class="nav-link" href="{{ url('kesatuan') }}">Kesatuan</a>
                            <a class="nav-link" href="{{ url('agama') }}">Agama</a>
                            <a class="nav-link" href="{{ url('pimpinan') }}">Pimpinan</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="{{ url('user') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Hak Akses
                    </a>
                    @endif
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <h5 style="text-transform:uppercase">{{ Auth::user()->name }}</h5>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
