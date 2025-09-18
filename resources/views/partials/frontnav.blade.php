<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container container-max">
        <a class="navbar-brand" href="index.html">Laeken<span class="text-muted">Jobs</span></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="{{ route("front.jobs") }}">Offres</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("front.blog") }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("about") }}">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                <li class="nav-item ms-3"><a class="btn btn-outline-primary" href="{{ route("register") }}">S'inscrire</a></li>
            </ul>
        </div>
    </div>
</nav>


