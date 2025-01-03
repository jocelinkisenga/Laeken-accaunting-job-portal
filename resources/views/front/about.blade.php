@extends('front.front')
@section('title', 'a propo')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/cat-3.jpg') }}" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="section-title bg-white text-start  pe-3">A PROPOS DE NOUS</h2>
                    <h5 class="mb-4">Bienvenu chez Laeken Consulting</h5>
                    <p class="mb-4">Pendant 5 ans entant qu'experts comptable nous avons accompagné des entreprises de
                        differents secteurs dans les recrutements</p>
                    <p class="mb-4">Ce savoir nous a permis de structurer notre expertiser et fonder Laeken Consulting
                        sarl, afin de mettre en relation les entreprises et la main d'oeuvre qualifiée</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Comptables</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Médecins</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Architecte, constructeurs
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mécaniciens, chauffeurs</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Ingénieurs civils</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tous travaux, etc.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('partials.cta')
<!--
    <div class="container-xxl py-5">
        <div class="container">
            <h2 class="section-title bg-white text-center  px-3">Nos autres services</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title">Maçonnerie</h5>
                            <p class="card-text">
                                M
                                Nos experts en maçonnerie réalisent des travaux de qualité pour tous vos projets de
                                construction.
                            <div>
                                <ul>
                                    <li>Construction de murs et fondations</li>
                                    <li>Réparation et rénovation de structures</li>
                                    <li>Aménagement extérieur</li>
                                </ul>
                            </div>



                            </p>
                            <a class="btn btn-light border-t py-md-3 px-md-5  bg-white mt-2 rounded" href="{{ route('create.company') }}" type="button">Recruter</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title">Service Comptable</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <a class="btn btn-light border-t py-md-3 px-md-5  bg-white mt-2 rounded" href="{{ route('create.company') }}" type="button">Recruter</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title">Services douaniers</h5>
                            <p class="card-text">
                                Accompagnement pour toutes les formalités douanières liées à l'import-export.
                            <div>
                                <ul>
                                    <li> Gestion des déclarations douanières</li>
                                    <li>Conseil en procédures d'import-export</li>
                                    <li> Optimisation des taxes et droits de douane</li>
                                    <li> Suivi des expéditions </li>
                                </ul>
                            </div>



                            </p>
                            <a class="btn btn-light border-t py-md-3 px-md-5  bg-white mt-2 rounded" href="{{ route('create.company') }}" type="button">Recruter</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title">Assainissement</h5>
                            <p class="card-text">
                                Des services d’assainissement pour assurer un environnement propre et sûr.
                            <div>
                                <ul>
                                    <li> Installation de systèmes d’assainissement</li>
                                    <li>Entretien des réseaux d’égouts</li>
                                    <li>Gestion des eaux usées</li>
                                </ul>
                            </div>
                            </p>
                            <a class="btn btn-light border-t py-md-3 px-md-5  bg-white mt-2 rounded" href="{{ route('create.company') }}" type="button">Recruter</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title"> Transport</h5>
                            <p class="card-text">

                                Transport rapide et sécurisé pour tous vos biens, tant à l'échelle locale qu'internationale.
                            <div>
                                <ul>
                                    <li>Transport de marchandises</li>
                                    <li>Livraison rapide et efficace</li>
                                    <li>Suivi des envois en temps réel</li>
                                </ul>
                            </div>




                            </p>
                            <a class="btn btn-light border-t py-md-3 px-md-5  bg-white mt-2 rounded" href="{{ route('create.company') }}" type="button">Recruter</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title"> Services informatiques</h5>
                            <p class="card-text">

                                Solutions informatiques adaptées pour la gestion de vos infrastructures et réseaux.
                            <div>
                                <ul>
                                    <li>Gestion de réseau et sécurité</li>
                                    <li>Développement et support logiciel</li>
                                    <li>Installation et maintenance d’équipements</li>
                                </ul>
                            </div>








                            </p>
                            <a class="btn btn-light border-t py-md-3 px-md-5  bg-white mt-2 rounded" href="{{ route('create.company') }}" type="button">Recruter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



@endsection
