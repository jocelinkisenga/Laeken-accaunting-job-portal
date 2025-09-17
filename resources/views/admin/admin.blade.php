<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset("admin/vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset("admin/css/sb-admin-2.min.css") }}" rel="stylesheet">



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Sidebar caché seulement en mobile */
        @media (max-width: 768px) {
            #accordionSidebar {
                display: none;
                transition: 0.3s;
            }

            #accordionSidebar.show {
                display: block;
                transition: 0.3s;
            }
        }

        /* Sidebar toujours visible en desktop */
        @media (min-width: 769px) {
            #accordionSidebar {
                display: block !important;
            }
        }

        /* Chat bubbles */
        .chat-bubble {
            padding: 10px 15px;
            border-radius: 20px;
            max-width: 70%;
        }

        .chat-left {
            background: #4e73df;
            color: #fff;
            border-bottom-left-radius: 0;
        }

        .chat-right {
            background: #f8f9fc;
            color: #5a5c69;
            border-bottom-right-radius: 0;
        }

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar Start -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LC <sup>2</sup></div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://127.0.0.1:8000/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">


            @include("admin.sidebar")

            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn nav-link btn-danger text-white" type="submit">Se deconnecter
                        <i class="fas fa-fw fa-table"></i>
                    </button>
                </form>
            </li>
        </ul>
        <!-- Sidebar End -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar, visible only in mobile) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" data-toggle="collapse" data-target="#accordionSidebar" aria-expanded="false" aria-controls="accordionSidebar">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Main Content -->
            <div class="container-fluid">


            @yield("content")


            <!-- Footer Start -->
            @include("admin.footer")
      </div>
      <!-- End Container -->

      </div>
      <!-- End Content Wrapper -->


      </div>

      <!-- Bootstrap JS and dependencies -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

      <!-- Template Javascript -->
      <script src="admin/js/main.js"></script>

      </body>

      </html>

