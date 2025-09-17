@extends("admin.admin")
@section("content")
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
                            Messages</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">24</div>
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
                            Revenus</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$4,500</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Progression Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Progression</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">60%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
                            Notifications</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
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

<!-- Chat Section -->
<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="card shadow">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Chat</h6>
                <button class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></button>
            </div>
            <div class="card-body" style="max-height: 350px; overflow-y: auto;">
                <!-- Messages -->
                <div class="d-flex mb-3">
                    <div class="chat-bubble chat-left">Salut ! Comment ça va ?</div>
                </div>
                <div class="d-flex justify-content-end mb-3">
                    <div class="chat-bubble chat-right">Très bien, et toi ?</div>
                </div>
                <div class="d-flex mb-3">
                    <div class="chat-bubble chat-left">Je prépare le dashboard 😉</div>
                </div>
            </div>
            <div class="card-footer">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Écrire un message...">
                    <div class="input-group-append">
                        <button class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Chat Section -->

@endsection
