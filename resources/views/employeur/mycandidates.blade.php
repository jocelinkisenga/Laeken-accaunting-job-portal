@extends('front.front')
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h2>Candidats</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>specialite</th>
                    <th>cv</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestataires as $prestataire)
                <tr>
                    <td>{{ $prestataire->name }}</td>
                    <td>{{ $prestataire->email }}</td>
                    <td>{{ $prestataire->speciality }}</td>

                    <td><a href="" class="btn btn-sm btn-primary">voir</a></td>

                    <td><a class="btn btn-sm btn-danger">Voir</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</main>

@endsection
