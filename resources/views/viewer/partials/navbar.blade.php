    <nav class="navbar navbar-expand-lg mb-0">
        <div class="container-fluid">
            <a href="/">
                <img class="navbar-brand" src="{{ asset('assets2/images/logo_footer.png') }}" alt="O-Seek">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-5">
                    <li class="nav-item border-end border-dark">
                        <a class="nav-link mx-lg-5 {{ $active === 'home' ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item border-end border-dark">
                        <a class="nav-link mx-lg-5 {{ $active === 'about' ? 'active' : '' }}"
                            href="{{ url('about') }}">Tentang</a>
                    </li>
                </ul>
            </div>
            <a href="/RegisterOperator" class="donasi-button mx-lg-4">Sign Up</a>
            <a href="/LoginOperator" class="login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" id="toggler-icon"></span>
            </button>
        </div>
    </nav>


    {{-- <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a href="#">
                <img class="navbar-brand" src="{{ asset('assets2/images/logo_fullname.png') }}" alt="O-Seek">
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
                        <li class="nav-item border-end">
                            <a class="nav-link active mx-lg-5" aria-current="page" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item border-end">
                            <a class="nav-link mx-lg-5" href="#">Tentang</a>
                        </li>                       
                        <li class="nav-item">
                            <a class="nav-link mx-lg-5" href="#">Panti Asuhan</a>
                        </li>                                              
                    </ul>
                </div>
            </div>
            <a href="#" class="btn btn-blue donasi-button mx-lg-4">Berdonasi</a>
            <a href="#" class="btn btn-pink login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" id="toggler-icon"></span>
            </button>
        </div>
    </nav> --}}
