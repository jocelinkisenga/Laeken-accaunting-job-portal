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
                @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->boulot->title }}</td>
                    <td>{{ $application->created_at }}</td>
                    <td>
                        @if ($application->confirm == true)
                        veuillez verifier votre mail
                        @else
                        <span class="badge bg-success">En cours</span>

                        @endif
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</main>

@endsection
