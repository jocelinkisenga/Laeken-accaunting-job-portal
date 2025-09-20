@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h4>Bon retour sur votre dashboard {{ Auth::user()->name }}</h4>

        <div class="row mt-5">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ route("employeur.myjobs") }}" class="list-group-item">Mes offres</a>
                </div>
            </div>
            <div class="col-md-9">
                <h6>vos stats</h6>
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
