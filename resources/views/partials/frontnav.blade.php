    <!-- Navbar Start -->
    <nav class="navbar  navbar-expand-lg  navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-2 px-lg-2">
            <img
                src="{{ asset("img/logo.jpg") }}"
                class="img-fluid rounded-circle" style="width:90%; height:90%"
                alt=""
            />
            <h3 class="text-white ml-2">
             Laeken Consulting</h3>
        </a>
        <button type="button" class="navbar-toggler me-2  collapsed" style="background-color : hsl(234, 99%, 29%); color :#f8f8f8; height:2em; border-color :#f8f8f8" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            MENU
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link text-white">Acceuil</a>
                <a href="{{route("about")}}" class="nav-item nav-link text-white">A propos</a>
                <a href="{{route("front.jobs")}} " class="nav-item nav-link text-white">Offres</a>
                <a href="{{route("front.blog")}} " class="nav-item nav-link text-white">Blog</a>
                <a href="{{route("contact")}} " class="nav-item nav-link text-white">Contact</a>
            </div>
            <a href="{{ route("create.candidate") }}" class="btn bg-white  py-4 px-lg-5 d-none d-lg-block" id="postuler">POSTULER<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav> 
    <!-- Navbar End -->
    {{-- <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Megawidth</a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
          </button>
          <div class="navbar-collapse collapse" id="ftco-nav" style="">
            <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                <li class="nav-item dropdown position-static">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
              <div class="dropdown-menu p-4" aria-labelledby="dropdown04">
                  <div class="row">
                      <div class="col-md-3">
                          <a class="dropdown-item" href="#">Page 1</a>
                        <a class="dropdown-item" href="#">Page 2</a>
                        <a class="dropdown-item" href="#">Page 3</a>
                        <a class="dropdown-item" href="#">Page 4</a>
                      </div>
                      <div class="col-md-3 d-none d-md-block">
                          <a href="#" class="img" style="background-image: url(images/img-1.jpg);"></a>
                          <div class="text">
                              <h3><a href="#">Amazing Architecture</a></h3>
                              <span>Architect</span>
                          </div>
                      </div>
                      <div class="col-md-3 d-none d-md-block">
                          <a href="#" class="img" style="background-image: url(images/img-2.jpg);"></a>
                          <div class="text">
                              <h3><a href="#">Amazing Architecture</a></h3>
                              <span>Architect</span>
                          </div>
                      </div>
                      <div class="col-md-3 d-none d-md-block">
                          <a href="#" class="img" style="background-image: url(images/img-3.jpg);"></a>
                          <div class="text">
                              <h3><a href="#">Amazing Architecture</a></h3>
                              <span>Architect</span>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            </ul>
          </div>
        </div>
      </nav> --}}
