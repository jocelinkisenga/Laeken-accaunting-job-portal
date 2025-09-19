@extends("front.front")
@section("content")

<main class="py-5">
    <div class="container container-max">
        <h2>Gestion des offres</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Titre</th>
                    <th>Entreprise</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($boulots as $key => $boulot)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $boulot->title }}</td>
                    <td>{{ $boulot->user->name }}</td>
                    <td>
                        @if ($boulot->published == true)
                        deja publie
                        @else
                        pas encore publie
                        @endif
                    </td>
                    <td>
                        @if($boulot->published != true)
                        <a class="btn btn-sm btn-danger" href="{{ route("admin.job.publish",["id" => $boulot->id]) }}">Publier</a>
                        @endif
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</main>





@endsection
