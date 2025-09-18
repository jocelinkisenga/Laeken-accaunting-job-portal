@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h2>Mes offres</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Assistant Paie</td>
                    <td>Actif</td>
                    <td><a class="btn btn-sm">Modifier</a></td>
                </tr>
            </tbody>
        </table>

    </div>
</main>

@endsection