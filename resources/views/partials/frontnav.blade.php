<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container container-max">
        <a class="navbar-brand" href="index.html">Laeken<span class="text-muted">Jobs</span></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="{{ route("front.jobs") }}">Offres</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("front.blog") }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("about") }}">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("contact") }}">Contact</a></li>
                @guest
                <li class="nav-item ms-3"><a class="btn btn-outline-primary" href="{{ route("register") }}">S'inscrire</a></li>

                @endguest
                @auth
                @switch(Auth::user()->role)
                    @case(2)
                <li class="nav-item ms-3"><a class="btn btn-primary" href="{{ route("dashboard-prestataire") }}">Dashboard</a></li>
                        @break
                        @case(3)
<li class="nav-item ms-3"><a class="btn btn-primary" href="{{ route("dashboard.employeur") }}">Dashboard</a></li>

                        @break

                    @default
<li class="nav-item ms-3"><a class="btn btn-primary" href="/dashboard-admin">Dashboard</a></li>


                @endswitch
                <li class="nav-item ms-3">
                    <form action="{{ route("logout") }}" method="post">
                        @csrf
                        <button class="btn btn-outline-danger">se deconnecter</button>

                    </form>
                </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>
