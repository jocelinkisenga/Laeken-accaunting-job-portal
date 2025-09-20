@extends("front.front")
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h3>Liste des employeurs</h3>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Domaine</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compagnies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->speciality }}</td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</main>

@endsection
