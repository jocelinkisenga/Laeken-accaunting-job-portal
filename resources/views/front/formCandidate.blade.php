@extends("front.front")
@section("title", "Formulaire entreprise")
@section("content")

<main class="py-5">
    <div class="container container-max">
        <h2>Postuler</h2>

        <div class="row">
            <div class="col-md-8">
                <div class="card p-4">
                    
                    @livewire('form-candidate', ['boulotId' => $boulotId])

                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">Conseils: relisez votre CV et adaptez le message.</div>
            </div>
        </div>

    </div>
</main>



@endsection
