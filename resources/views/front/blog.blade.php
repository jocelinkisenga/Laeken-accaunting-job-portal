@extends('front.front')
@section('title', 'a propos')
@section('content')
<div class="container my-5 bg-white">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($articles as $article)
            <div class="col ">
                <div class="card h-100 shadow-sm ">
                    <img class="card-img-top" src="{{ asset("/storage/".$article->tumbnail) }}" alt="{{ $article->title }}" width="500" height="300" />


                    <div class="card-body">
                        <h4 class="card-title">{{ $article->title }}</h4>
                        <p class="card-text">{{ $article->description }}</p>
                        <a href="{{ route("front.single.blog", ['title'=> $article->title, "id" => $article->id]) }}" class="btn btn-primary">Lire plus</a>

                    </div>
                    <div class="card-footer text-muted">
                        publie le {{ $article->created_at }}
                    </div>

                </div>

            </div>


            @endforeach




        </div>
    </div>
</div>
@endsection
