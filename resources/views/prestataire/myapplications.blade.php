@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h2>Mes candidatures</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Offre</th>
                    <th>Date</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Comptable</td>
                    <td>05 Sep 2025</td>
                    <td><span class="badge bg-success">En cours</span></td>
                </tr>
            </tbody>
        </table>

    </div>
</main>

@endsection