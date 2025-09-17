    <!-- Navbar Start -->
    <nav class="navbar  navbar-expand-lg  navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-2 px-lg-2">
            <img
                src="{{ asset("img/logo.jpg") }}"
                class="img-fluid rounded-circle" style="width:90%; height:90%"
                alt=""
            />
            <h3 class="text-white ml-2">
             Laeken Consulting</h3>
        </a>
        <button type="button" class="navbar-toggler me-2  collapsed" style="background-color : hsl(234, 99%, 29%); color :#f8f8f8; height:2em; border-color :#f8f8f8" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            MENU
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link text-white">Acceuil</a>
                <a href="{{route("about")}}" class="nav-item nav-link text-white">A propos</a>
                <a href="{{route("front.jobs")}} " class="nav-item nav-link text-white">Offres</a>
                <a href="{{route("front.blog")}} " class="nav-item nav-link text-white">Blog</a>
                <a href="{{route("contact")}} " class="nav-item nav-link text-white">Contact</a>
            </div>
            <a href="{{ route("create.candidate") }}" class="btn bg-white  py-4 px-lg-5 d-none d-lg-block" id="postuler">POSTULER<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

