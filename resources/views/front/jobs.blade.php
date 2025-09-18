@extends('front.front')
@section('title', 'a propos')
@section('content')



<main class="py-5">
    <div class="container container-max">
        <h2>Liste des offres</h2>

        <div class="row">
            @foreach ($jobs as $job)
            <div class="col-md-8">
                <div class="list-group">
                    <a href="{{ route("front.single.job",["id" => $job->id]) }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $job->title }}</h5>
                            <small class="small-muted">Kinshasa • CDI</small>
                        </div>
                        <p class="mb-1 small-muted">FinCorp • 5+ années d'expérience</p>
                    </a>
                    <a href="job-details.html" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Analyste Comptable</h5>
                        <p class="mb-1 small-muted">AuditPro • Remote</p>
                    </a>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</main>

@endsection
