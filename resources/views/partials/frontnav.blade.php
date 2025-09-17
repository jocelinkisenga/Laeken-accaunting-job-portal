    <!-- Navbar Start -->
    <nav class="navbar  navbar-expand-lg  navbar-light shadow sticky-top p-0">
        <div class="container-fluid d-flex justify-content-between align-items-center">
                    <a href="/" class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset("img/logo.jpg") }}" class="img-fluid rounded-circle" style="width:50px; height:50px" alt="logo laeken" />
                        <h3 class="text-white fw-bold mb-0">
                            Laeken Consulting</h3>
                    </a>
                    <button type="button" class="navbar-toggler me-3 text-white" style="background-color : hsl(234, 99%, 29%);  height:2em; border-color :#f8f8f8" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    arial-controls="navbarCollapse" arial-expanded="false" aria-label="Toggle navigation"
                    >
                    <span class="navbar-toggler-icon text-white" style="color:#f8f8f8"></span>

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

        </div>
    </nav>

