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
                @forelse ( $boulots as $boulot )

                <tr>
                    <td>{{ $boulot->title }}</td>
                    <td>
                        @if ($boulot->done === false)
                        En cours
                        @elseif ($boulot->published === false)
                        pas encore publie
                        @else
                        Boulot regle
                        @endif
                    </td>
                    <td><a class="btn btn-sm">Modifier</a></td>
                </tr>

                @empty

                @endforelse

            </tbody>
        </table>

    </div>
</main>

@endsection
