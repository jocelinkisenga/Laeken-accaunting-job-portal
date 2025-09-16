@extends('front.front')
@section('title', 'a propos')
@section('content')
<div class="container my-5 bg-white">
    <div class="row">
        <div class="row-cols-1 g-5 justify-center">

            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-title">
                        <h1> {{ $job->title }}</h1>
                        <p class="text-muted"> Auteur <strong>Laeken Consulting</strong>. fin candidature le {{ $job->created_at }}</p>

                    </div>
                    <p class="card-text">
                        {{ $job->description }}

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

