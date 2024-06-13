<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Eco-service</title>
    <link rel="stylesheet" href="linkToCSS" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-marron fixed-top shadow">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="">
                    <img src="{{ asset('img/eco_logo.png') }}" alt="Logo" width="70" height="60" class="d-inline-block align-text-top">
                    <span><b>Eco-Services</b></span>
                </a>

                <ul class="navbar-nv justify-content-center">
                    <!-- @auth -->
                    <!-- <li class="nav-item">
                        <a class="nav-link custom-text-color" href="{{ route('list-contact') }}">Listes des contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="link custom-text-color" href="{{ route('list-stage') }}">Demandes de stages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-text-color" href="{{ route('logout') }}">Déconnexion</a>
                    </li> -->
                    <!-- @else -->
                    <li class="nav-item">
                        <a class="nav-link custom-text-color" href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="link custom-text-color" href="{{ route('catalogue') }}">Catalogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="link custom-text-color" href="{{ route('panier') }}">Mon Panier</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="link custom-text-color" href="">Admin</a>
                    </li> -->
                </ul>
                <!-- @endauth -->

            </div>
        </nav>
    </div>

    @yield('page-content')

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Eco-Services</h3>
                        <div class="contact-info">
                            <p><i class="fas fa-map-marker-alt"></i>974 Rue de la Bergeresse, 45100 Olivet</p>
                            <p><i class="fa fa-envelope"></i>ecoservices@gmail.com</p>
                            <p><i class="fa fa-phone"></i>+33 7 44 19 18 67</p>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Liens utiles</h3>
                        <ul>
                            <li><a href="">Nos produits disponibles</a></li>
                            <li><a href="">La démarche 0 déchet : pourquoi ?</a></li>
                            <li><a href="">Contactez-Nous</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>

</html>