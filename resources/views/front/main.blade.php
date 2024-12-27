@extends('front.front')
@section('title', 'Laeken consulting sarl')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="section-t text-uppercase mb-3 animated slideInDown">Recrutement sur mesure</h5>
                                <h1 class="display-3 text-white animated slideInDown">Le meilleur Portail de l'emploi</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Engagement des solutions sur mesure adaptées à votre
                                    secteur</p>
                                <a href="{{ route('create.candidate') }}"
                                    class="btn read-more py-md-3 px-md-5 me-3 animated slideInLeft">Postuler pour un
                                    emploi</a>
                                <a href="{{ route('create.company') }}"
                                    class="btn btn-light border-t py-md-3 px-md-5 animated slideInRight">Recruter des
                                    candidats</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="section-t text-uppercase mb-3 animated slideInDown">Découvrez les meilleurs
                                    profils</h5>
                                <h1 class="display-3 text-white animated slideInDown">Une main d'oeuvre qualifiée</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Retrouvez auprès de nous la meilleure main d'oeuvre
                                    qualifiée</p>
                                <a href="{{ route('create.candidate') }}"
                                    class="btn read-more py-md-3 px-md-5 me-3 animated slideInLeft">Postuler pour un
                                    emploi</a>
                                <a href="{{ route('create.company') }}"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Recruter des candidats</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="section-title bg-white text-center  px-3">NOS SERVICES</h2>
            <h5 class="mb-5"></h5>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp h-100" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-users section-t  mb-4"></i>
                            <h5 class="mb-3">Recrutement sur mesure</h5>
                            <p>Nous identifions et plaçons les meilleurs talents pour répondre à vos besoins.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp h-100" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-building section-t  mb-4"></i>
                            <h5 class="mb-3">Conseil RH</h5>
                            <p>Grâce à notre expertise, nous vous aidons à optimiser vos processus de gestion des ressources humaines.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user section-t mb-4"></i>
                            <h5 class="mb-3">Création de profil</h5>
                            <p>Grâce à notre vaste réseau, nous vous mettons en relation avec des personnes clés pour accéder à de nouvelles opportunités.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-handshake section-t  mb-4"></i>
                            <h5 class="mb-3">Accompagnement personnalisé</h5>
                            <p>Profitez de conseils sur mesure pour optimiser votre recherche d'emploi ou recruter une main-d'œuvre qualifiée.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/cat-3.jpg') }}"
                            alt="recrutement" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="section-title bg-white text-start  pe-3">A PROPOS DE NOUS</h2>
                    <h5 class="mb-4">Bienvenu chez Laeken Consulting</h5>
                    <p class="mb-4">Depuis 5 ans, en tant qu'experts-comptables, nous accompagnons des entreprises de divers secteurs dans leurs besoins en recrutement.</p>
                    <p class="mb-4">Cette expertise nous a permis de structurer nos compétences et de fonder Laeken Consulting SARL, afin de connecter les entreprises avec une main-d'œuvre qualifiée.</p>
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
                    <a class="btn read-more py-3 px-5 mt-2" href="">En savoir plus</a>
                </div>
            </div>

        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="section-title bg-white text-start  pe-3">Notre recrutement</h2>

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
                        <img class="img-fluid position-absolute w-100 h-100 rounded" src="{{ asset('img/carousel-1.jpg') }}"
                            alt="recrutement" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Team Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="section-title bg-white text-center  px-3">NOTRE EQUIPE</h2>
                <h5 class="mb-5">Nos Experts</h5>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"></h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->
    @include('partials.cta')

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h3 class="section-title bg-white text-center  px-3">ILS EN PARLENT</h3>
                <h5 class="mb-5">Nos employés et Clients en parlent!</h5>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">

                    <h5 class="mb-0"> Jean-Pierre Ngalula</h5>

                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">je suis impressionnée par le service de LAEKEN CONSULTING. Leur équipe a
                            parfaitement compris mes besoins en recrutement et m'a aidée à trouver les bons talents
                            pour mon entreprise. Leur réactivité et leur professionnalisme sont inégalés. Merci pour
                            votre aide précieuse !</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">

                    <h5 class="mb-0">Pathel</h5>
                    <p></p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Travailler avec LAEKEN CONSULTING a été une expérience formidable. Ils m'ont aidé
                            à
                            recruter des profils de haute qualité pour notre entreprise en RDC. Le processus a été
                            rapide et sans accroc. Je suis ravi des résultats et recommande vivement leurs services.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">

                    <h5 class="mb-0">Chantal Ndala</h5>

                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">"LAEKEN CONSULTING m'a permis de trouver un emploi qui correspond parfaitement à
                            mes compétences. Leur équipe m'a guidée dans chaque étape, du dépôt de ma candidature
                            à l'entretien. Une expérience que je n'oublierai pas !</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">

                    <h5 class="mb-0">Zhao Li</h5>

                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">L’équipe de LAEKEN CONSULTING a été très professionnelle tout au long du
                            processus de
                            recrutement. Ils comprennent bien le marché local et ont trouvé des candidats adaptés à nos
                            besoins. Très satisfait de leur service !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
