@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h3>Bienvenu sur votre dashboard {{ Auth::user()->name }}</h3>

        <div class="row mt-5">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ route("prestataire.myapplications") }}" class="list-group-item list-group-item-action">Mes candidatures</a>
                </div>
            </div>
            <div class="col-md-9">
                <h5>Tableau de bord - Prestataire</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card p-3">Candidatures envoyées<br><strong>{{ \App\Models\Candidate::whereUserId(Auth::user()->id)->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
