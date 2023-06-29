<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TaskEasy</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('src/assets/images/logos/logotaskeasy.png')}}" />
  <link rel="stylesheet" href="{{asset('src/assets/css/styles.min.css')}}" />
  <!-- <link rel="stylesheet" href="client/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="http://127.0.0.1:8000/" class="text-nowrap logo-img">
            <img src="{{asset('src/assets/images/logos/logotaskeasy.png')}}" width="100" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Accueil</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Actions</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/addtask" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Ajouter un projet</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/listtask" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description "></i>
                </span>
                <span class="hide-menu">Liste des projets</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/taskencours" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Projets en cours</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./finishtask" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Projets terminés</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Collaborations</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="http://127.0.0.1:8000/chats" target="_blank" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Chat membres</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">TaskEasy Pro</h6>
                <a href="http://127.0.0.1:8000/versionpro#" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm ">disponible</a>
              </div>
              <div class="unlimited-access-img">
                <img src="{{asset('src/assets/images/backgrounds/rocket.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
             
              <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <div>{{ Auth::user()->name }}</div>&nbsp; &nbsp;
                  <img src="{{asset('src/assets/images/profile/Basic_Ui__186_-removebg-preview.png')}}" alt="" width="35" height="35" class="rounded-circle">
                 
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                  <a href="http://127.0.0.1:8000/profile" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">Proflie</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                  </div>

                  <div class="btn btn-outline-dark mx-3 mt-2 d-block">
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Déconnection') }}
                            </x-dropdown-link>
                      </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
        <div class="container-fluid">
            @yield('content')
            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">Design and Developed by Nafissa Distributed by <a href="/welcome">TaskEasy</a></p>
            </div>
      </div>
    </div>
  </div>
  <script src="{{asset('src/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('src/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('src/assets/js/app.min.js')}}"></script>
  <script src="{{asset('src/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('src/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('src/assets/js/dashboard.js')}}"></script>
</body>

</html>
