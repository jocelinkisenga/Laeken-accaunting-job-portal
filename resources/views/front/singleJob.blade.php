@extends('front.front')
@section('title', 'a propos')
@section('content')

<main class="py-5">
    <div class="container container-max">
        <h2>Détails de l'offre</h2>

        <div class="card p-4">
            <h3>{{ $job->title}}</h3>

            <p class="small-muted">{{ $job->user->name }} • {{ $job->type }}</p>
            <h5>Description</h5>
            <p class="small-muted">{{ $job->description }}</p>

            <a href="{{ route("create.candidate", ["boulotId" => $job->id]) }}" class="btn btn-primary">Postuler</a>

            <a href="{{ route("front.jobs") }}" class="btn btn-outline-secondary">Soumettre une offre similaire</a>
        </div>

    </div>
</main>



@endsection

