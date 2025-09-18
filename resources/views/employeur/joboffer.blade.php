@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h2>Soumettre une offre</h2>

        <div class="card p-4">
            <h5>Soumettre une offre</h5>
            <form action="{{ route("store.job") }}" method="post">
                @csrf
                <div class="mb-3"><label class="form-label">Titre</label><input type="text" class="form-control" name="title"></div>
                <div class="mb-3"><label class="form-label">Description</label><textarea class="form-control" name="description"></textarea></div>
                <div class="mb-3"><label class="form-label">Type</label><input typde="text" class="form-control" name="type"></div>
                <div class="mb-3"><label class="form-label">Date limite</label><input class="form-control" name="due_date" type="date"></div>

                <button type="submit" class="btn btn-primary">Publier l'offre</button>
            </form>
        </div>

    </div>
</main>


@endsection
