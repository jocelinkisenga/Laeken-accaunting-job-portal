@extends('front.front')
@section('title', 'Laeken consulting sarl')
@section('content')
<header class="hero">
    <div class="container container-max">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-5">Trouver des talents comptables ou décrocher votre prochain poste en finance</h1>
                <p class="lead small-muted">Laeken connecte les prestataires comptables et les employeurs — recherche intelligente, candidatures rapides, et gestion simplifiée.</p>
                <p>
                    <a href="jobs.html" class="btn btn-primary me-2">Voir les offres</a>
                    <a href="register.html" class="btn btn-outline-secondary">S'inscrire</a>
                </p>
                <div class="mt-4 d-flex gap-3">
                    <div class="card card-compact card-ghost"><strong>1,250+</strong>
                        <div class="small-muted">Candidats</div>
                    </div>
                    <div class="card card-compact card-ghost"><strong>320+</strong>
                        <div class="small-muted">Entreprises</div>
                    </div>
                    <div class="card card-compact card-ghost"><strong>4.8</strong>
                        <div class="small-muted">Note moyenne</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://images.unsplash.com/photo-1559526324-593bc073d938?w=900&q=80" alt="hero" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container container-max">
        <h3>Offres récentes</h3>
        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Comptable Général — Remote</h5>
                        <p class="small-muted mb-1">Entreprise: FinCorp • CDI</p>
                        <p class="small-muted">Salaire: 900$ - 1,200$</p>
                        <a href="job-details.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Auditeur Interne — Kinshasa</h5>
                        <p class="small-muted mb-1">Entreprise: AuditPro • CDD</p>
                        <p class="small-muted">Salaire: 700$ - 1,000$</p>
                        <a href="job-details.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Assistant Paie — Temps partiel</h5>
                        <p class="small-muted mb-1">Entreprise: PayrollX • Freelance</p>
                        <p class="small-muted">Salaire: 300$ - 500$</p>
                        <a href="job-details.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
