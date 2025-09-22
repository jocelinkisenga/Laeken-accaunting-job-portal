<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">

    <div class="container container-max">
        <a class="navbar-brand" href="/">
            <img src="{{ asset("logo.png") }}" class="img-fluid rounded-circle" style="width:40px; height:40px" alt="logo laeken" />
            Laeken Consulting</a>
        <button type="button" class="navbar-toggler navb" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-expanded="false"
        aria-label="Toggle navigation "><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navmenu" >
            <ul class="navbar-nav ms-auto align-items-lg-center text-white">
                <li class="nav-item"><a class="nav-link navbar-brand" href="{{ route("front.jobs") }}">Offres</a></li>

                <li class="nav-item text-white"><a class="nav-link navbar-brand" href="{{ route("front.blog") }}">Blog</a></li>

                <li class="nav-item"><a class="nav-link navbar-brand" href="{{ route("about") }}">À propos</a></li>

                <li class="nav-item"><a class="nav-link navbar-brand" href="{{ route("contact") }}">Contact</a></li>

                @guest
                <li class="nav-item ms-3"><a class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft" href="{{ route("register") }}">S'inscrire</a></li>


                @endguest
                @auth
                @switch(Auth::user()->role)
                    @case(2)
                <li class="nav-item ms-3"><a class="btn bg-white" href="{{ route("dashboard-prestataire") }}">Dashboard</a></li>
                        @break
                        @case(3)
<li class="nav-item ms-3"><a class="btn btn-primary" href="{{ route("dashboard.employeur") }}">Dashboard</a></li>

                        @break

                    @default
<li class="nav-item ms-3"><a class="btn dashboardBtn" href="/dashboard-admin">Dashboard</a></li>



                @endswitch
                <li class="nav-item ms-3">
                    <form action="{{ route("logout") }}" method="post">
                        @csrf
                        <button class="btn btn-danger">se deconnecter</button>

                    </form>
                </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>



    <!-- Navbar Start -->
    {{-- <nav class="navbar  navbar-expand-lg  navbar-light sticky-top shadow-sm">

        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset("img/logo.jpg") }}" class="img-fluid rounded-circle" style="width:50px; height:50px" alt="logo laeken" />
                <h3 class="text-white fw-bold mb-0">
                    Laeken Consulting</h3>
            </a>
            <button type="button" class="navbar-toggler  text-white" style="background-color : hsl(234, 99%, 29%);  height:2em; border-color :#f8f8f8" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" arial-controls="navbarCollapse" arial-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white" style="color:#f8f8f8"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link text-white">Acceuil</a>
                    <a href="{{route("about")}}" class="nav-item nav-link text-white">A propos</a>
                    <a href="{{route("front.jobs")}} " class="nav-item nav-link text-white">Offres</a>
                    <a href="{{route("front.blog")}} " class="nav-item nav-link text-white">Blog</a>
                    <a href="{{route("contact")}} " class="nav-item nav-link text-white">Contact</a>
                </div> --}}
                {{-- <a href="{{ route("create.candidate") }}" class="btn bg-white  py-4 px-lg-5 d-none d-lg-block" id="postuler">POSTULER<i class="fa fa-arrow-right ms-3"></i></a> --}}
            {{-- </div>

        </div>
    </nav>
 --}}
