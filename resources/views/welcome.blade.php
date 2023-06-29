<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>


    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">



            <!DOCTYPE html>
<html lang="zxx">

<head>
    <title>TaskEase | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Recruit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

    <!-- Favicons -->
    <link href="client/images/logotaskeasy.png" rel="icon">
    <link href="client/images/logotaskeasy.png" rel="logo">

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="client/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
    <link href="client/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="client/css/fonts/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i"
        rel="stylesheet">
</head>

<body>
    <!-- Slider -->
    <div class="w3-banner-info-w3ltd position-relative">
        <!-- header -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h1><a class="navbar-brand" href="http://127.0.0.1:8000/">TaskEasy

                        </a></h1>
                    <button class="navbar-toggler ml-lg-auto ml-sm-5 bg-light" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="ml-lg-5 navbar-nav mr-lg-auto">
                            <li class="nav-item active  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="http://127.0.0.1:8000/">Accueil</a>
                            </li>
                            <li class="nav-item  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="about.html">A propos </a>
                            </li>
                            <li class="nav-item dropdown mr-lg-4 my-lg-0 my-sm-4 my-3">
                                <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a href="job_list.html">Job List</a>
                                    <a href="job_single.html">Job Single</a>
                                </div>
                            </li>
                            <li class="nav-item mr-lg-4 my-lg-0 mb-sm-4 mb-3">
                                <a href="http://127.0.0.1:8000/user/contact">contact</a>
                            </li>
                        </ul>
                          @if (Route::has('login'))

                              @auth
                        
                          <button type="button" class="btn w3ls-btn text-uppercase font-weight-bold d-block">
                          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                 
                        </button>
                              @else

                        <button type="button" class="btn w3ls-btn text-uppercase font-weight-bold d-block" data-toggle="modal"
                            aria-pressed="false" data-target="#exampleModal1">
                            Creer un compte
                        </button>

                        @if (Route::has('register'))
                        <button type="button" class="btn w3ls-btn btn-2 ml-lg-1 text-uppercase font-weight-bold d-block"
                            data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                            Se connecter
                        </button> 
                        @endif
                    @endauth
                    @endif
                    </div>

                    <div class="languages">&nbsp
                        <a href="local/fr" > <img src="client/images/flag/Flag-Senegal.png" width="20"> </a>&nbsp
                        <a href="local/en"> <img src="client/images/flag/Flag_of_the_United_States.png" width="25"></a>&nbsp
                        <a href="local/ar"><img src="client/images/flag/Flag-Saudi-Arabia.webp" width="20"></a>&nbsp
                    </div>

                </nav>
            </div>
        </header>
        <!-- //header -->




        <div class="slider">
            <ul class="rslides" id="slider">
                <li>
                    <div class="d-flex banner-w3pvt-bg1 common-bg">
                        <div class="d-flex mx-auto align-items-center justify-content-center flex-column">
                            <div class="bnr-w3pvt">
                                <h3>global TaskEasy</h3>
                                <div class="d-flex justify-content-between bnr-sub-txt align-items-center">
                                    <span></span>
                                    <p class="text-uppercase text-white">Gérer mieux vos projets</p>
                                    <span></span>
                                </div>
                            </div>
                            <div class="row justify-content-between bnr-form-w3ls">
                                <div class="col-lg-12">
                                    <h4>Une nouvelle façon de méner à bien vos projets</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex banner-w3pvt-bg2 common-bg">
                        <div class="d-flex mx-auto align-items-center justify-content-center flex-column">
                            <div class="bnr-w3pvt">
                                <h3>global TaskEasy</h3>
                                <div class="d-flex justify-content-between bnr-sub-txt align-items-center">
                                    <span></span>
                                    <p class="text-uppercase text-white">Gérer mieux vos projets</p>
                                    <span></span>
                                </div>
                            </div>
                            <div class="row justify-content-between bnr-form-w3ls">
                                <div class="col-lg-12">
                                    <h4>Une nouvelle façon de méner à bien vos projets</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex banner-w3pvt-bg3 common-bg">
                        <div class="d-flex mx-auto align-items-center justify-content-center flex-column">
                            <div class="bnr-w3pvt">
                                <h3>global TaskEasy</h3>
                                <div class="d-flex justify-content-between bnr-sub-txt align-items-center">
                                    <span></span>
                                    <p class="text-uppercase text-white">Gérer mieux vos projets</p>
                                    <span></span>
                                </div>
                            </div>
                            <div class="row justify-content-between bnr-form-w3ls">
                                <div class="col-lg-12">
                                    <h4>Une nouvelle façon de méner à bien vos projets</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //Slider -->
    <!--partners  -->
    <div class="w3ltdits-partners bg-theme" id="partners">
        <div class="container pt-4">
            <div class="title-wthree text-center">
                <h3 class="w3ltd-title">
                    Merci de votre confiance.
                </h3>
                <span></span>
            </div>
            <ul class="list-unstyled py-md-5 py-3 partners-icon text-center">
                <li>
                    <span class="fa fa-lastfm-square" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-meanpath" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-behance-square" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-cc-discover" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-cc-stripe" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-cc-jcb" aria-hidden="true"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- //partners -->
    <!-- about -->
    <section class="about-wthree py-3">
        <div class="container  py-sm-5">
            <div class="title-sec-w3layouts_pvt text-center">
                <span class="title-wthree">Un monde où aboutissent vos projets</span>
                <h4 class="w3layouts_pvt-head">A vos rythmes, avec succès</h4>
            </div>
            <div class="row head-row-home">
                <div class="col-md-4 my-4 home-grid">
                    <span class="head-line"></span>
                    <span class="fa fa-info-circle" aria-hidden="true"></span>
                    <h4 class="home-title my-3">Pourquoi choisir TaskEasy</h4>
                    <p>Notre application de gestion de projets offre une expérience conviviale et puissante, facilitant la collaboration en équipe et la réussite de vos projets.</p>
                    <a href="about.html" class="btn wthree-bnr-btn">En savoir plus </a>
                </div>
                <div class="col-md-4 my-4 home-grid">
                    <span class="head-line"></span>
                    <span class="fa fa-connectdevelop" aria-hidden="true"></span>
                    <h4 class="home-title my-3">Que faisons nous ?</h4>
                    <p> Nous travaillons en interne pour aujurd'hui proposer aux utilisateurs ayant des projets de pouvoir aboutir à la realisation de ces derniers.</p>
                    <a href="about.html" class="btn wthree-bnr-btn">En savoir plus</a>
                </div>
                <div class="col-md-4 my-4 home-grid">
                    <span class="fa fa-users" aria-hidden="true"></span>
                    <h4 class="home-title my-3">Nous découvrir</h4>
                    <p>TaskEasy est une plateforme créer pour faciliter la gestion des projets ...</p>
                    <a href="about.html" class="btn wthree-bnr-btn">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
    <!-- job roles -->
    <div class="wthreepvt-pos py-md-5 py-5" id="positions">
        <div class="container py-lg-5">
            <div class="wthreepvt-pos-row row  text-center">
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-check-square" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Sécurite</h4>
                        <p>La sécurité est une valeur primordiale pour notre application de gestion de projets. 
                            Nous nous engageons à protéger vos données et à garantir la confidentialité et l'intégrité 
                            de vos informations sensibles.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids  border-left border-right my-sm-0 my-5">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-suitcase" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Innovation</h4>
                        <p>Nous restons à l'avant-garde de l'innovation en matière de gestion de projets.</p>
                    </div>
                </div>
                <div class="col-lg-4 wthreepvt-pos-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-thumbs-up" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Intuitivité</h4>
                        <p>Nous attachons une grande importance à l'expérience utilisateur. </p>
                    </div>
                </div>
            </div>
            <div class="wthreepvt-pos-row border-top row text-center pb-lg-5 pt-md-0 pt-5 mt-md-0 mt-sm-5 mt-4">
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-thumb-tack" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Efficacité </h4>
                        <p>Nous valorisons l'efficacité dans tout ce que nous faisons.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids mt-lg-0 mt-md-3 border-left border-right pt-sm-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-external-link" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Productivité</h4>
                        <p>La productivité est une valeur fondamentale de notre application de gestion de projets.</p>
                    </div>
                </div>
                <div class="col-lg-4 wthreepvt-pos-grids pt-md-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-cog" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Assurance</h4>
                        <p>L'assurance est une valeur essentielle de notre application de gestion de projets.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //job roles -->
    <!-- services bottom -->
    <section class="bg-theme position-relative" id="services-bot">
        <div class="container-fluid px-0">
            <div class="title-sec-w3layouts_pvt text-center">
                <span class="title-wthree text-white">Un monde où aboutissent vos projets</span>
                <h4 class="w3layouts_pvt-head">A vos rythmes, avec succès</h4>
            </div>
            <img src="client/images/services.jpg" alt="" class="img-fluid">
            <div class="row head-row-home mx-0">
                <div class="offset-5"></div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-md-6 service-title my-sm-5 my-4">
                            <h4 class="home-title text-white">Exemple de projets par catégorie</h4>
                            <p class="sec-4">Debutez vos projets sur de bonnes bases plus facilement avec des categories
                                qui correspondent aux vôtres.
                            </p>
                        </div>
                        <div class="col-md-6 service-title my-md-5">
                            <h4 class="home-title text-white">Exemple de projets par taches</h4>
                            <p class="sec-4">De nombreux projets sont composer d'une ou plusieurs taches.
                                comment organiser un projets ? Visitez les propositions qui 
                                nous avons munissieusement choisi pour vous afin de mieux vous orienter.
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-md-0 mt-sm-5 mt-4">
                            <h4 class="home-title text-white">Exemple de projets par outils</h4>
                            <p class="sec-4">Commencer un projet nécessite des fois de se 
                                munir de certains outils.Pour une bonne réalisation, nous 
                                proposons une gamme de projets en espérant que vous aillez 
                                plus d'idées concernant le vôtre. 
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-md-0 mt-sm-5 mt-4">
                            <h4 class="home-title text-white">Idées de projets</h4>
                            <p class="sec-4">Vous êtes en quête de réalisation de projets ? 
                                Cliquez sur en savoir plus.
                            </p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="job_list.html" class="btn wthree-bnr-btn">Read more</a>
                    </div>
                </div>
                <div class="offset-2"></div>
            </div>
        </div>
    </section>
    <!-- //services bottom-->
    <!-- blog -->
    <section class="blog_w3ls py-lg-5">
        <div class="container py-5">
            <div class="title-sec-w3layouts_pvt text-center">
                <span class="title-wthree">Un monde où aboutissent vos projets</span>
                <h4 class="w3layouts_pvt-head">A vos rythmes, avec succès</h4>
            </div>
            <div class="row head-row-home">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-sm-0 mt-4">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2"
                                role="button">
                                <img class="card-img-bottom" src="client/images/b1.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0 px-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    Julien Farduche</span>
                                <span>
                                    mis à jour le 27/02/2023</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2"
                                        role="button">Chef conseillé TaskEasy</a>
                                </h5>
                                <p>Avec plus de 9 années d'expérience dans le domaine de la gestion de projets.</p>
                            </div>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal2">
                                En savoir plus
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3"
                                role="button">
                                <img class="card-img-bottom" src="client/images/c3.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    Frédéric Le maitre</span>
                                <span>
                                mis à jour le 20/04/2023</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3"
                                        role="button">Conseillé TaskEasy</a>
                                </h5>
                                <p> Frédéric Le maitre est un véritable champion de la collaboration en équipe.</p>
                            </div>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal3">
                                En savoir plus
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 mx-auto">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4"
                                role="button">
                                <img class="card-img-bottom" src="client/images/b3.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    Maryline De jong</span>
                                <span>
                                    mis à jour le 04/04/2023</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4"
                                        role="button">Conseillère TaskEasy</a>
                                </h5>
                                <p> 
                                    Maryline De jong est le moteur de l'innovation au sein de notre équipe de gestion de projets. 
                                </p>
                            </div>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal4">
                                En savoir plus
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog -->
    <!-- Footer -->
    <footer id="footer" class="py-sm-5 py-4 bg-theme">
        <div class="container">
            <div class="footer-top-w3ls">
                <h2><a href="index.html" class="navbar-brand">TaskEasy</a></h2>
                <p class="text-white">Découvrez notre application de gestion de projets 
                    tout-en-un, conçue pour simplifier et optimiser votre flux de travail. 
                    Avec des fonctionnalités puissantes et une interface conviviale, vous 
                    pouvez facilement organiser, suivre et collaborer sur vos projets. De plus, 
                    ne manquez aucune mise à jour importante grâce à notre fonction d'abonnement 
                    à la newsletter intégrée. Restez informé(e) des dernières nouvelles, des 
                    fonctionnalités à venir et des conseils pratiques pour maximiser votre productivité. 
                    Rejoignez notre communauté d'utilisateurs satisfaits et donnez un nouvel élan à vos projets dès aujourd'hui ! </p>
            </div>
            <div class="row  pt-5">
                <div class="col-lg-3 col-sm-6 footer_grid1">
                    <h5>Addresse</h5>
                    <div class="d-flex align-items-center">
                        <span class="fa fa-building mr-4"></span>
                        <p>90 Street, Sahm
                            <br>Dakar 11000.</p>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <span class="fa fa-building mr-4"></span>
                        <p>16 Street, Fass
                            <br>Dakar 11000.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 ml-auto">
                    <h5>s'abonner</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control  border-0 border-rounded" id="emailid" placeholder="Enter email"
                                name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="Submit" class="form-control bg-light-theme  border-0 border-rounded" id="sub"
                                value="Submit" name="sub">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    <div class="cpy-right text-center py-4">
        <p class="text-dark">© 2023 TaskEsay. All rights reserved | Design by
            <a href="" class="text-theme"> DePaulwin!.</a>
        </p>
    </div>
    <!-- blog modal1 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel2">Chef consillé TaskEasy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="client/images/b1.jpg" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                        Juliien Farduche est 
                        un expert chevronné. Passionné par l'organisation et la planification, Julien Farduche excelle dans 
                        la coordination et l'exécution des projets, veillant à ce que les objectifs soient atteints dans 
                        les délais impartis. Son approche méthodique et sa capacité à résoudre les problèmes font de Julien Fraduche 
                        un atout précieux pour mener à bien vos projets
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal1 -->
    <!-- blog modal2 -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel3">Conseillé TaskEasy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="client/images/b2.jpg" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                        Avec une grande expertise 
                        dans la gestion des ressources et des communications, Frédéric Le maitre s'assure que tous les membres 
                        de l'équipe travaillent de manière harmonieuse et efficace. Toujours prêt(e) à partager ses 
                        connaissances et à encourager la coopération, Frédéric Le maitre est l'interlocuteur(trice) idéal pour 
                        favoriser une dynamique d'équipe productive et atteindre les objectifs communs.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal2 -->
    <!-- blog modal3 -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel4">Conseillère TaskEasy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="client/images/b3.jpg" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                        Avec une passion pour les dernières avancées technologiques,  Maryline De jong explore en permanence 
                        de nouvelles méthodes et outils pour améliorer l'efficacité et l'automatisation des processus. 
                        Son expertise en matière de solutions logicielles et sa capacité à intégrer les technologies de 
                        pointe dans la gestion de projets garantissent des résultats innovants et une optimisation continue.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal3-->



    <!-- login modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <form method="POST" action="{{ route('login') }}" class="p-3">
                       @csrf

                        <!-- Email Address -->
                        <div class="form-group">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email"  class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                         <x-input-error :messages="$errors->get('email')"  class="form-control"/>
                        </div>

                         <!-- password Address -->

                        <div class="form-group">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="form-control" />
                        </div>


                        <div class="right-w3l">
                        <i class="fa-brands fa-google" style="color: black;"></i>
                            <input type="submit" class="form-control bg-theme" value=" {{ __('Connexion') }}" >

                        </div>
                        <br>


                        <div class="right-w3l">
                            <a href="/auth/google/redirect" svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                                        Google
                                </a>
                        </div>

                        <div class="row sub-w3l my-3">
                            <div class="col sub-w3ltd">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-dark">
                                <span></span>Se souvenir moi</label>
                            </div>

                            <div class="col forgot-w3l text-right">
                            <a href="#" class="text-dark">                           
                             @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif</a>
                            </div>
                        </div>
                        <p class="text-center dont-do">N'avez vous pas de compte ?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark">
                                <strong>Créer un compte</strong></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login modal -->



    <!-- register modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel1">Créer un compte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                <form method="POST" action="{{ route('register') }}">
                    @csrf

                        <div class="form-group">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required
                                autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                
                        </div>
                        
                        <div class="form-group">
                              <x-input-label for="firstname" :value="__('Firstname')" />
                            <x-text-input id="firstname" class="form-control" type="text" name="firstname" :value="old('firstname')" required
                                autofocus autocomplete="firstname" />
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />

                        </div>

                        <div class="form-group">


                          <!-- Email Address -->

                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                                    autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <!--------------------------->
                        </div>

                        <!--
                        <div class="form-group" hidden>
                          Rol -
                                <x-input-label for="role" :value="__('Role')" />
                                <select
                                class="form-control" 
                                    id="role" name="role">
                                    <option value="">-- Selectionner le role --</option>
                                    <option value="1" >Admin</option>
                                    <option value="2">user</option>S
                                </select>
                                {{-- <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" /> --}}
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />

                        </div>
                                    -->
                        <!---------------------------------->

                        

                        <div class="form-group">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="form-control" type="password" name="password" required
                                autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" class="form-control" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="sub-w3l">
                            <div class="sub-w3ltd">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3 text-dark">
                                    <span></span>J'accepte les termes et conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control bg-theme" value="{{ __('Register') }}">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- //register modal -->
    <!-- js -->
    <script src="client/js/jquery-2.2.3.min.js"></script>
    <!-- Slider-JavaScript -->
    <script src="client/js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider, #slider1").responsiveSlides({
                auto: true,
                nav: false,
                speed: 1500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- //Slider-JavaScript -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Les mots de passe ne correspondent pas");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- //js -->
    <script src="client/js/move-top.js"></script>
    <script src="client/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="client/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="client/js/bootstrap.min.js"></script>
</body>

</html>

