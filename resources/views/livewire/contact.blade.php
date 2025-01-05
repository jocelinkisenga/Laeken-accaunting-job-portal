<div>
    
       <!-- Header Start -->
       <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Accueil</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
 @include("partials.cta")

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="section-title title-h2 bg-white text-center  px-3">Nous Contacter</h2>
                <h5 class="mb-5">Pour toute pré-occupation, Contactez-nous</h5>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5></h5>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 read-more" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Bureau</h5>
                            <p class="mb-0">272, Av. kambove, ville de Lubumbashi</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 read-more" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">+243 992 278 885</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 read-more" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">contact@laekenconsulting.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.515746704892!2d27.481123174625562!3d-11.657815434780003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723fdd3d15ad9b%3A0xaacf462dbf8250e6!2sWenzeasy%20Group!5e0!3m2!1sfr!2scd!4v1735093707554!5m2!1sfr!2scd"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                @if (session("message"))
                    <div class="m-4">
                        <span class="alert alert-success text-success">{{ session('message') }}</span>
                    </div>
                @endif

                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form wire:submit.prevent="submit">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" wire:model="name" class="form-control" id="name" placeholder="votre nom" required>
                                    <label for="name">Nom             
                            </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" wire:model="email" class="form-control" id="email" placeholder="votre Email" required>
                                    <label for="email">Email

                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" wire:model="subject" class="form-control" id="sujet" placeholder="votre sujet" required>
                                    <label for="subject">Sujet 

                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" wire:model="msg" placeholder="votre message" id="message" style="height: 150px" required></textarea>
                                    <label for="message">Message

                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn read-more w-100 py-3" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

</div>
