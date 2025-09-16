@extends('front.front')
@section('title', 'a propos')
@section('content')
<div class="container my-5 bg-white">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($jobs as $job)
            <div class="col ">
                <div class="card h-100 shadow-sm ">

                    <div class="card-body">
                        <h4 class="card-title">{{ $job->title }}</h4>
                        <p class="card-text">{{ Str::limit($job->description, 50) }}</p>

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
</div>
@endsection

