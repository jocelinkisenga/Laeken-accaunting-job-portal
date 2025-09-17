<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="https://comptabilite.laekenconsultin.com" target="_blank">
            <i class="fas fa-fw fa-cog"></i>
            <span>ACCEDEZ AU LOGICIEL</span>
        </a>

    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("admin.candidates") }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Les candidatures</span>
        </a>

    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("admin.compagnies") }}">
            <i class="fas fa-fw fa-building"></i>
            <span>Les Entreprises</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("admin.index.article") }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Les Articles</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("admin.index.job") }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Offres d'emploi</span>
        </a>

    </li>




    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <form action="{{ route("logout") }}" method="POST">
            @csrf
            <button class="btn nav-link btn-danger text-white" type="submit">Se deconnecter
                <i class="fas fa-fw fa-table"></i>
    </li>



</ul>
