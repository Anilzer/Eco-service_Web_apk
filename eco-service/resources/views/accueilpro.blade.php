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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
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
                    <li class="nav-item">
                        <a class="nav-link custom-text-color" href="{{ route('accueilpro') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="link custom-text-color" href="{{ route('cataloguepro') }}">Catalogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="link custom-text-color" href="{{ route('formulaire') }}">Demande de de devis</a>
                    </li>
                    <li class="nav-item">
                        <a class="link custom-text-color" href="{{ route('menu') }}">Menu</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="carousel-overlay"></div>
                <img src="{{ asset('img/car_1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5>Adoptez le Zéro Déchet</h5>
                    <p>Découvrez les bases de la démarche zéro déchet pour un mode de vie plus sain.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="carousel-overlay"></div>
                <img src="{{ asset('img/car_2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5>Les produits Écoresponsables</h5>
                    <p>Explorez notre gamme de produits écologiques et durables.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-overlay"></div>
                <img src="{{ asset('img/car_3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5>Recyclage et Compostage</h5>
                    <p>Apprenez les techniques de recyclage et de compostage pour réduire vos déchets.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <p class="fw-bold display-6"><span>La démarche zéro déchet, c'est quoi ?</span></p>
                <p class="text-center mt-5">La démarche zéro déchet est une approche écoresponsable visant à réduire la
                    quantité de déchets générés par les activités humaines, en privilégiant des
                    pratiques durables et respectueuses de l'environnement. Cette philosophie repose
                    sur cinq principes clés, souvent résumés par les <b>"5R"</b>.</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <!-- Colonne pour "Refuser" -->
                    <div class="col-lg-2 col-md-4 column mb-4">
                        <div class="text-center">
                            <img src="{{ asset('img/r1.png') }}" alt="Refuser" class="mb-5">
                            <h4>Refuser</h4>
                            <p>Refuser les produits à usage unique et les articles non nécessaires.</p>
                        </div>
                    </div>

                    <!-- Colonne pour "Réduire" -->
                    <div class="col-lg-2 col-md-4 column mb-4">
                        <div class="text-center">
                            <img src="{{ asset('img/r2.png') }}" alt="Réduire" class="mb-4 mt-1">
                            <h4>Réduire</h4>
                            <p>Consommer moins et de manière plus responsable.</p>
                        </div>
                    </div>

                    <!-- Colonne pour "Réutiliser" -->
                    <div class="col-lg-2 col-md-4 column mb-3">
                        <div class="text-center">
                            <img src="{{ asset('img/r3.png') }}" alt="Réutiliser" class="mb-5">
                            <h4>Réutiliser</h4>
                            <p>Opter pour des articles réutilisables plutôt que des produits jetables.</p>
                        </div>
                    </div>

                    <!-- Colonne pour "Recycler" -->
                    <div class="col-lg-2 col-md-4 column mb-3">
                        <div class="text-center">
                            <img src="{{ asset('img/r4.png') }}" alt="Recycler" class="mb-5">
                            <h4>Recycler</h4>
                            <p>Trier les déchets pour assurer un recyclage efficace.</p>
                        </div>
                    </div>

                    <!-- Colonne pour "Rendre à la terre" -->
                    <div class="col-lg-2 col-md-4 column mb-4">
                        <div class="text-center">
                            <img src="{{ asset('img/r5.png') }}" alt="Rendre à la terre" class="mb-4">
                            <h4>Rendre à la terre</h4>
                            <p>Composter les déchets organiques pour les transformer en engrais naturel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card video-card">
                    <div class="card-body p-0">
                        <h5 class="card-title text-center mt-3">La démarche zéro déchet</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9EEwsfZUfoY" allowfullscreen></iframe>
                        </div>
                        <p class="card-text mt-3 px-3">Cette vidéo explique en détail la démarche zéro déchet et comment vous pouvez l'adopter dans votre quotidien.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mn-list">
                    <h2>Voir plus</h2>
                    <ul>
                        <li><a href="">Passer au zéro déchet : une démarche écolo et économique !</a></li>
                        <li><a href="">Pouvons nous vivre sans aucun déchet ?</a></li>
                        <li><a href="">Passer au "Zéro déchet": c'est quoi le premier geste à adopter?</a></li>
                        <li><a href="">Qu'appelles t-on produits écoresponsables ?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-center mb-5"><span>Quelques produits écoresponsables</span></h2>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="{{ asset('img/e1.jpg') }}" alt="Product 1" class="img-fluid">
                    <div class="product-name">Brosse à dents en bambou</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="{{ asset('img/e2.jpg') }}" alt="Product 2" class="img-fluid">
                    <div class="product-name"> Cotons-tiges réutilisables</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="{{ asset('img/e3.jpg') }}" alt="Product 3" class="img-fluid">
                    <div class="product-name">Gourdes en acier - verre</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="{{ asset('img/e4.png') }}" alt="Product 4" class="img-fluid">
                    <div class="product-name"> Essuie-tout réutilisable</div>
                </div>
            </div>
            <!-- Product 5 -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="{{ asset('img/e5.jpg') }}" alt="Product 5" class="img-fluid">
                    <div class="product-name">Dentifrice solide ou en poudre</div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>

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