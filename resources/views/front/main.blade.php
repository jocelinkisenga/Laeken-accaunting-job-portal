@extends('front.front')
@section('title', 'Laeken consulting sarl')
@section('content')


<header class="hero pt-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/carousel-1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h1>Recrutement sur mesure</h1>

                    <p>

                        @guest
                        <a href="{{  route("front.jobs") }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Voir les offres</a>


                        <a href="{{ route("register") }}" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">S'inscrire</a>


                        @endguest
                        @auth
                        <a href="{{  route("front.jobs") }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Voir les offres</a>



                        <a href="{{ route("create.job") }}" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Creer un emploi</a>

                        @endauth
                    </p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel-2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Trouvez les meilleurs emplois</h1>

                    <p>

                        @guest
                        <a href="{{  route("front.jobs") }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Voir les offres</a>


                        <a href="{{ route("register") }}" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">S'inscrire</a>


                        @endguest
                        @auth
                        <a href="{{  route("front.jobs") }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Voir les offres</a>



                        <a href="{{ route("create.job") }}" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Creer un emploi</a>

                        @endauth
                    </p>

                </div>
            </div>

        </div>
    </div>
</header>


<section class="py-5">
    <div class="container container-max">
        <h3 class="text-primary">Offres récentes</h3>
        <div class="row g-3 mt-3">
            @foreach ($jobs as $job)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $job->title }}</h5>
                        <p class="small-muted mb-1">Entreprise: {{ $job->user->name }} • {{ $job->type }}</p>
                        <a href="{{ route("front.single.job", ['title'=> $job->title, "id" => $job->id]) }}" class="stretched-link"></a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="container-xxl py-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h2 class="section-title text-primary bg-white text-center  px-3 ">NOS SERVICES</h2>

        <h5 class="mb-5"></h5>
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp h-100" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-users section-t text-primary mb-4"></i>

                        <h5 class="mb-3">Recrutement sur mesure</h5>
                        <p>Nous identifions et plaçons les meilleurs talents pour répondre à vos besoins.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp h-100" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-building text-primary section-t  mb-4"></i>

                        <h5 class="mb-3">Conseil RH</h5>
                        <p>Grâce à notre expertise, nous vous aidons à optimiser vos processus de gestion des ressources humaines.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-primary section-t mb-4"></i>

                        <h5 class="mb-3">Création de profil</h5>
                        <p>Grâce à notre vaste réseau, nous vous mettons en relation avec des personnes clés pour accéder à de nouvelles opportunités.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-users text-primary  section-t  mb-4"></i>

                        <h5 class="mb-3">Accompagnement personnalisé</h5>
                        <p>Profitez de conseils sur mesure pour optimiser votre recherche d'emploi ou recruter une main-d'œuvre qualifiée.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="section-title bg-white text-start text-primary  pe-3">Notre recrutement</h2>

                <p class="mb-2">Chez Laeken Consulting, nous croyons fermement que le talent ne se résume pas aux
                    diplômes.
                    Votre passion, vos compétences pratiques et votre désir constant d'apprendre sont ce qui nous
                    importe le plus.
                    Qu'importe votre parcours — que vous soyez un jeune diplômé,
                    un professionnel chevronné ou en pleine reconversion — nous vous ouvrons grand nos portes.</p>
                <h4>Pourquoi nous choisir?</h4>
                <p class="mb-2"><strong>Formation continue:</strong> Des programmes de développement et de formation continue vous
                    attendent
                    pour vous accompagner dans votre progression.</p>
                <p class="mb-2">
                    <strong> Environnement collaboratif:</strong> Chez nous, chaque voix compte. Nous valorisons le travail d'équipe
                    et la collaboration dans un cadre inclusif.
                </p>
                <p class="mb-3">
                    Rejoindre Laeken Consulting, c’est bien plus qu’un simple emploi.
                    C’est une opportunité de faire partie d’une communauté où chacun peut contribuer et évoluer.
                    Faites le saut avec nous et transformez votre potentiel en succès!

                    Ensemble, construisons l'avenir! 🚀
                </p>

                <a class="btn read-more py-3 px-5 mt-2" href="">En savoir plus</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100 rounded" src="{{ asset('img/carousel-1.jpg') }}" alt="recrutement" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@endsection
