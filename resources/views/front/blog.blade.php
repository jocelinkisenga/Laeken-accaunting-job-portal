@extends('front.front')
@section('title', 'a propos')
@section('content')


<main class="container">
    <section class="section">

        <div class="row g-3 mt-5">
            @foreach ($articles as $article)

                    <div class="col-md-4">
                        <div class="card p-3"><img src="{{ asset("/storage/".$article->tumbnail) }}" class="img-fluid rounded mb-2" alt="{{ $article->title }}" >



                            <h4>{{ $article->title }}</h4>

                            <p class="small text-muted">Par Laeken — {{ $article->created_at }}</p><a href="{{ route("front.single.blog", ['title'=> $article->title, "id" => $article->id]) }}" class="btn btn-link btn-primary w-25 text-white">Lire</a>


                        </div>
                    </div>


            @endforeach

        </div>
    </section>
</main>

@endsection
