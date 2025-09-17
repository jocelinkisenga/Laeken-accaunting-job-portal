@extends("admin.admin")
@section("content")
@php
    use \App\Models\Article;
    use \App\Models\Boulot;
    use \App\Models\Candidate;
    use \App\Models\Company;


@endphp
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<!-- Content Row (Cards) -->
<div class="row">

    <!-- Messages Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Offres en cours </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Boulot::whereDone(false)->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Revenus Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Offres confimees</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Boulot::whereDone(true)->count() }}</div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total offres</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Boulot::count() }}</div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Notifications Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                           Nombres d'articles</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Article::count() }}</div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bell fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total candidats</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Candidate::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bell fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Totals societes</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Company::count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bell fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


</div>
<!-- End Content Row -->


@endsection
