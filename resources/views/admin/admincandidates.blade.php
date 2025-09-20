@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h2>Les candidats</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Specialite</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                <tr>
                    <td>{{ $candidate->name }}</td>
                    <td>{{ $candidate->email }}</td>
                    <td>{{ $candidate->speciality }}</td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</main>

@endsection
