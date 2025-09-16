@extends('front.front')
@section('title', 'a propos')
@section('content')
<div class="container my-5 bg-white">
<div class="row">
    <div class="row-cols-1 g-5 justify-center">

        <div class="card shadow-sm">
            <img src="{{ asset("/storage/".$article->tumbnail) }}" alt="{{ $article->title }}" class="card-img-top" width="300" height="300">



            <div class="card-body">
                <div class="card-title">
                   <h1> {{ $article->title }}</h1>
                    <p class="text-muted"> Auteur <strong>Laeken Consulting</strong>. le {{ $article->created_at }}</p>

                </div>
                <p class="card-text">
                {{ $article->description }}

                </p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

