@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h2>Dashboard Employeur</h2>

        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ route("employeur.myjobs") }}" class="list-group-item">Mes offres</a>
                    <a href="{{ route("employeur.mycandidates") }}" class="list-group-item">Candidats</a>
                </div>
            </div>
            <div class="col-md-9">
                <h5>Tableau de bord - Employeur</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card p-3">Offres actives<br><strong>8</strong></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3">Candidats reçus<br><strong>54</strong></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>


@endsection