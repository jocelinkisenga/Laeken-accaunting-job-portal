@extends("front.front")
@section("content")
@php
    use \App\Models\Article;
    use \App\Models\Boulot;
    use \App\Models\Candidate;
    use \App\Models\Company;

@endphp
<main class="py-5">
    <div class="container container-max">
        <h2>Bon retour mons  l'Admin</h2>

        <div class="row mt-5">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ route("admin.compagnies") }}" class="list-group-item">Societes</a>
                    <a href="{{ route("admin.candidates") }}" class="list-group-item">Candidats</a>
                    <a href="{{ route("admin.index.job") }}" class="list-group-item">Offres</a>
                    <a href="{{ route("admin.index.article") }}" class="list-group-item">Articles</a>
                    <a href="reports.html" class="list-group-item">Rapports</a>
                </div>
            </div>
            <div class="col-md-9">
                <h5>Tableau de bord - Admin</h5>
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="card p-3">Utilisateurs<br><strong>1,580</strong></div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">Offres<br><strong>1,200</strong></div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">Revenus mensuels<br><strong>$12,300</strong></div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">Tickets ouverts<br><strong>6</strong></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>


@endsection
