@extends('front.front')
@section("title", "login as admin")

@section('content')
<main class="py-5">
    <div class="container container-max">


        <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <div class="card p-4">
                    <h4>Connexion</h4>
                    <form action="{{ route("login") }}" method="POST">
                        @csrf
                        <div class="mb-3"><label class="form-label">Email</label>

                            <input class="form-control  type=" text" name="input_type" placeholder=" " autocomplete="off" required autofocus>


                        </div>

                        <div class="mb-3"><label class="form-label">Mot de passe</label><input type="password" class="form-control" name="password"></div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div><input type="checkbox"> Se souvenir</div>
                            <a href="#" class="small-muted">Mot de passe oublié?</a>
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                    </form>

                </div>
                <div class="mb-3"><a  href="{{ route("register") }}" >Vous n'avez pas de compte? creez-en</a></div>

            </div>
        </div>

    </div>
</main>


@endsection
