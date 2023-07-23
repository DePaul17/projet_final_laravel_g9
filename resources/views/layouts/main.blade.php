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
              <span class="hide-menu">{{ GoogleTranslate::trans('Accueil',app()->getLocale()) }}
</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">{{ GoogleTranslate::trans('Dashboard',app()->getLocale()) }}</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">{{ GoogleTranslate::trans('Actions',app()->getLocale()) }}</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/addtask" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">{{ GoogleTranslate::trans('Ajouter un projet',app()->getLocale()) }}</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/listtask" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description "></i>
                </span>
                <span class="hide-menu">{{ GoogleTranslate::trans('Liste des projets',app()->getLocale()) }}</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/taskencours" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">{{ GoogleTranslate::trans('Projets en cours',app()->getLocale()) }}</span>
              </a>
            </li>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./finishtask" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">{{ GoogleTranslate::trans('Projets terminés',app()->getLocale()) }}</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">{{ GoogleTranslate::trans('Collaborations',app()->getLocale()) }}</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="http://127.0.0.1:8000/ChatsUser" aria-expanded="false">
                <span>
                <i class="ti ti-mail fs-6"></i>
                </span>
                <span class="hide-menu">{{ GoogleTranslate::trans('Chat',app()->getLocale()) }}</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="http://127.0.0.1:8000/yomibot" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">{{ GoogleTranslate::trans('Yomi',app()->getLocale()) }}</span>
              </a>
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
              <div class="card-body">
                            <div class="row">
                                <select class="form-select changeLang">
                                    <option value="en" {{ session()->get('locale') == 'en'?'selected':'' }}>English</option>
                                    <option value="fr" {{ session()->get('locale') == 'fr'?'selected':'' }}>Francais</option>
                                    <option value="ar" {{ session()->get('locale') == 'ar'?'selected':'' }}>Arabe</option>
                                    <option value="tr" {{ session()->get('locale') == 'tr'?'selected':'' }}>Turc</option>
                                    <option value="ja" {{ session()->get('locale') == 'ja'?'selected':'' }}>Japonais</option>
                                    <option value="zh" {{ session()->get('locale') == 'zh'?'selected':'' }}>Chine</option>
                                </select>
                            </div>
                        </div>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
             
              <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                <div>{{ Auth::user()->name }}</div>&nbsp; &nbsp;
                @if (empty(Auth::user()->photo))
                    <img src="{{ asset('src/assets/images//logos/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
                @else
                    <img src="{{ asset('src/assets/images/logos/' . Auth::user()->photo) }}" alt="" width="35" height="35" class="rounded-circle">
                @endif
            </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                  <a href="http://127.0.0.1:8000/profile" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">{{ GoogleTranslate::trans('Profile',app()->getLocale()) }}</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">{{ GoogleTranslate::trans('My Account',app()->getLocale()) }}</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">{{ GoogleTranslate::trans('My Task',app()->getLocale()) }}</p>
                    </a>

                    <button type="button" class="d-flex align-items-center gap-2 dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">  
                      <i class="ti ti-eye fs-6"></i>
                      <p class="mb-0 fs-3">{{ GoogleTranslate::trans('Projets archivés',app()->getLocale()) }}</p>
                    </button>
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
<!-- Modal authentificate -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ GoogleTranslate::trans('Es-ce vraiment vous ?',app()->getLocale()) }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('password.verify') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{ GoogleTranslate::trans('Mot de passe',app()->getLocale()) }}</label>
                                <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" onclick="clearFields()">{{ GoogleTranslate::trans('Effacer',app()->getLocale()) }}</button>
                            <button type="submit" class="btn btn-success">{{ GoogleTranslate::trans('Continuer',app()->getLocale()) }}</button>
                        </div>
                    </form>
                </div>
          </div>
          <script type="text/javascript">
        var url = "{{ route('changeLang') }}";
        $('.changeLang').change(function(event) {
           //alert();
            window.location.href = url+"?lang="+$(this).val();
        });
    </script>