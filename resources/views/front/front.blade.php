<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laeken Consulting</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords"
        content="emploi, recrutement, recherche d'emploi, offre d'emploi en rdc, Kamoa, Kimoto, TFM, Kolwezi,Lubumbashi,
                           placement">
    <meta name="description"
        content="Laeken consulting sarl, est une entreprise qui met en relation entre 
    les recruteurs et les candidats aux posts">
    <meta name="author" content="Laeken consulting">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fav/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fav/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('fav/site.webmanifest') }}">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>

    @livewireStyles
</head>

<body>


    @include('partials.frontnav')
    @yield('content')
    @include('partials.frontFooter')


    <!-- Back to Top -->
    <a href="{{ route("create.candidate") }}" class="btn btn-lg btn-primary  back-to-top">Postuler pour un emploi</a>

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- JavaScript Libraries -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
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
