<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laeken Consulting Sarl  agence de recrutement et d'affectation </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords"
        content="emploi, recrutement, recherche d'emploi, offre d'emploi en rdc, Kamoa, Kimoto, TFM, Kolwezi,Lubumbashi,
                           placement">
    <meta name="description"
        content="Laeken consulting sarl, est une entreprise qui met en relation entre 
    les recruteurs et les candidats à différents postes, elle aide les entreprises à trouver la meilleur main d'oeuvre et les candidats de rejoindre les meilleurs postes">
    <meta name="author" content="Jocelin Kisenga">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fav/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fav/favicon-16x16.png') }}">
 

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
   

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('maskable_icon.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    @livewireStyles
</head>

<body>


    @include('partials.frontnav')
    @yield('content')
    @include('partials.frontFooter')


    <!-- Back to Top -->
     <a href="https://api.whatsapp.com/send?phone=+243850244690&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="btn btn-lg btn-success  back-to-top"  target="_blank">
         <i class="fa fa-whatsapp my-float"></i></a> 


</a>

<!-- Bouton flottant WhatsApp -->
<a href="https://wa.me/243977773924?text=Bonjour%2C%20j%27aimerais%20plus%20d%27infos"
   class="btn btn-success btn-lg rounded-circle whatsapp-float"
   target="_blank">
   <i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i>
</a>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
/* Position fixe */
.whatsapp-float {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 1000;
  box-shadow: 0 4px 12px rgba(0,0,0,0.3);
  animation: pulse 1.5s infinite;
}

/* Animation pulsante */
@keyframes pulse {
  0% {
    transform: scale(1);
    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
  }
  70% {
    transform: scale(1.1);
    box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
  }
  100% {
    transform: scale(1);
    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
  }
}
</style>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- JavaScript Libraries -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src=" {{ asset('lib/owlcarousel/owl.carousel.min.js') }} "></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script>

</body>

</html>
