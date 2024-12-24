@extends("front.front")
@section("title", "a propo")
@section("content")
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset("img/carousel-2.jpg") }}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="section-title bg-white text-start  pe-3">A PROPOS DE NOUS</h2>
                <h5 class="mb-4">Bienvenu chez Laeken Consulting</h5>
                <p class="mb-4">Pendant 5 ans entant qu'experts comptable nous avons accompagné des entreprises de differents secteurs dans les recrutements</p>
                <p class="mb-4">Ce savoir nous a permis de structurer notre expertiser et fonder Laeken Consulting sarl, afin de mettre en relation les entreprises et la main d'oeuvre qualifiée</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Comptables</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Médecins</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Architecte, constructeurs</p>
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


@endsection