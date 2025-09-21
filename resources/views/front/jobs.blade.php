@extends('front.front')
@section('title', 'a propos')
@section('content')
@php
    use Illuminate\Support\Str;
@endphp


<main class="py-5">
    <div class="container container-max">
        <h2 class="text-primary">Liste des offres</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">

            {{-- @foreach ($jobs as $job)
            <div class="col-md-4">
                <div class="list-group">
                    <a href="{{ route("front.single.job",["title" => $job->title, "id" => $job->id]) }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $job->title }}</h5>
                            <small class="small-muted">{{ $job->type }}</small>
                        </div>
                        <p class="mb-1 small-muted">fin {{ $job->due_date }}</p>
                    </a>
                    <a href="{{ route("front.single.job",["title" => $job->title, "id" => $job->id]) }}" class="list-group-item list-group-item-action bg-primary text-white">



                        <h5 class="mb-1">Voir Plus</h5>
                    </a>
                </div>
            </div>

            @endforeach --}}
@foreach ($jobs as $job)
<div class="col ">
    <div class="card h-100 shadow-sm ">

        <div class="card-body">
            <h4 class="card-title">{{ $job->title }}</h4>
            <p class="card-text">{{ Str::limit($job->description, 50, '...')}}</p>

            <a href="{{ route("front.single.job", ['title'=> $job->title, "id" => $job->id]) }}" class="btn btn-primary">Lire plus</a>

        </div>
        <div class="card-footer text-muted">
            publie le {{ $job->created_at }}
        </div>

    </div>

</div>

@endforeach

        </div>

    </div>
</main>

@endsection
