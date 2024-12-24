<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LC <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route("admin.home") }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("admin.candidates") }}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Les candidatures</span>
        </a>

    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("admin.compagnies") }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Les Entreprises</span>
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