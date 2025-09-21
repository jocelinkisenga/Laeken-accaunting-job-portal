<nav class="navbar navbar-expand-lg navbar-dark navbabg sticky-top shadow-sm">

    <div class="container container-max">
        <a class="navbar-brand" href="/">
            <img src="{{ asset("logo.png") }}" class="img-fluid rounded-circle" style="width:40px; height:40px" alt="logo laeken" />
            Laeken Consulting</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-expanded="false"
        aria-label="Toggle navigation "><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navmenu" >
            <ul class="navbar-nav ms-auto align-items-lg-center text-white">
                <li class="nav-item"><a class="nav-link navbar-brand" href="{{ route("front.jobs") }}">Offres</a></li>

                <li class="nav-item text-white"><a class="nav-link navbar-brand" href="{{ route("front.blog") }}">Blog</a></li>

                <li class="nav-item"><a class="nav-link navbar-brand" href="{{ route("about") }}">À propos</a></li>

                <li class="nav-item"><a class="nav-link navbar-brand" href="{{ route("contact") }}">Contact</a></li>

                @guest
                <li class="nav-item ms-3"><a class="btn btn-outline-primary" href="{{ route("register") }}">S'inscrire</a></li>

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
