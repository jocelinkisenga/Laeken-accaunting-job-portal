@extends('front.front')
@section("content")
<main class="py-5">
    <div class="container container-max">
        <h2>Candidats</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Candidat</th>
                    <th>Expérience</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jean</td>
                    <td>3 ans</td>
                    <td><a class="btn btn-sm">Voir</a></td>
                </tr>
            </tbody>
        </table>

    </div>
</main>

@endsection