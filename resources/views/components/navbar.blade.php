<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav"  data-aos="fade-down">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="ruote('homepage')">
            <img
                src="/media/logo-criptoart.png"
                height="50"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -1px;" />
        </a>

        <!-- Toggle button -->
        <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars link-light"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse " id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'homepage' ? 'fw-bold' : ''}}" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('characters')}}">CHARACTERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.create')}}">CREATE NFT</a>
                </li>
            </ul>
            <!-- Left links -->

            <div class="d-flex align-items-center">
                <button data-mdb-ripple-init type="button" class="btn btn-outline-light px-3 me-2 btn-navbar">
                    Login
                </button>
                <button data-mdb-ripple-init type="button" class="btn btn-light me-3 btn-navbar">
                    Sign up for free
                </button>
            </div>

            <div class="d-flex align-items-center">
            <a href="#"><img src="/media/social-media.png" alt="social-media" width="100px"></a>
            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->