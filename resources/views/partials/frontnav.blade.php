    <!-- Navbar Start -->
    <nav class="navbar  navbar-expand-lg  navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-white"><i class="fa fa-book me-3"></i>Laeken Consulting</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" style="background-color : hsl(234, 99%, 29%); color :#f8f8f8; height:2em; border-color :#f8f8f8" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            {{-- <span class="navbar-toggler-icon" style="color : #171acc;" ></span> --}}
            MENU
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link text-white">Acceuil</a>
                <a href="about.html" class="nav-item nav-link text-white">A propos</a>

                <a href="{{route("contact")}} " class="nav-item nav-link text-white">Contact</a>
            </div>
            <a href="{{ route("create.candidate") }}" class="btn bg-white  py-4 px-lg-5 d-none d-lg-block" id="postuler">POSTULER<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->