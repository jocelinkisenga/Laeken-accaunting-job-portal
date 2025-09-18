@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h2>Inscription</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#prest" type="button">Prestataire</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#employ" type="button">Employeur</button></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="prest">
                            <form method="Post" action="{{ route("register") }}">
                                    @csrf
                                <div class="mb-3"><label class="form-label">Nom complet</label><input class="form-control" name="name" type="text"></div>
                                <input type="hidden" name="role" value="2">
                                <div class="mb-3"><label class="form-label">Email </label><input class="form-control" name="email" type="email"></div>
                                <div class="mb-3"><label class="form-label">Telephone</label><input type="tel" class="form-control" name="phone"></div>
                                <div class="mb-3"><label class="form-label">Specialite</label><input class="form-control" name="speciality"></div>
                                <div class="mb-3"><label class="form-label">mot de passe</label><input class="form-control" name="password" type="password"></div>
                                <div class="mb-3"><label class="form-label">confirmer le mot de passe</label><input class="form-control" name="password_confirmation" type="password"></div>

                            <button class="btn btn-primary" type="submit">Créer compte prestataire</button>


                            </form>

                        </div>
                        <div class="tab-pane fade" id="employ">
                            <form method="Post" action="{{ route("register") }}">
                                @csrf
                                <div class="mb-3"><label class="form-label">Nom de l'entreprise</label><input class="form-control" name="name" type="text"></div>
                                <input type="hidden" name="role" value="3">
                                <div class="mb-3"><label class="form-label">Email </label><input class="form-control" name="email" type="email"></div>
                                <div class="mb-3"><label class="form-label">Telephone</label><input type="tel" class="form-control" name="phone"></div>
                                <div class="mb-3"><label class="form-label">Domaine de service</label><input class="form-control" name="speciality"></div>
                                <div class="mb-3"><label class="form-label">mot de passe</label><input class="form-control" name="password" type="password"></div>

                                <button class="btn btn-primary" type="submit">Créer compte employeur</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>


@endsection
