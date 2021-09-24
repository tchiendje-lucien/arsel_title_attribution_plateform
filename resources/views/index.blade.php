<!DOCTYPE html>
<html lang="en">

<head>
    <title>CoderDocs - Bootstrap 5 Documentation Template For Software Projects</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap Documentation Template For Software Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://arsel-cm.org/">ARSEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="mb-2 navbar-nav me-auto mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Documentation
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Les lois</a></li>
                                <li><a class="dropdown-item" href="#">Les decrets</a></li>
                                <li><a class="dropdown-item" href="#">Les arretés</a></li>
                                <li><a class="dropdown-item" href="#">Les Regime</a></li>
                                <li><a class="dropdown-item" href="#">Procedure</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="mr-auto d-flex " style="margin-right: 2%">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <button class="btn btn-primary" type="submit">Connexion</button>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: -5%">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/signup-bg.jpg" class="bd-placeholder-img" width="100%" height="100%"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <rect width="100%" height="0%" fill="#777" />

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/hilton21.jpg" class="bd-placeholder-img" width="100%" height="100%"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <rect width="100%" height="100%" fill="#777" />

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/hilton0.jpg" class="bd-placeholder-img" width="100%" height="100%"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <rect width="100%" height="100%" fill="#777" />

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </main>


    <div class="page-content">
        <div class="container">
            <div class="py-5 docs-overview">
                <div class="row justify-content-center">
                    <div class="py-3 col-12 col-lg-4">
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <h5 class="mb-3 card-title">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-map-signs"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">Introduction</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing
                                    elit. Aenean commodo ligula eget dolor.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-1"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="py-3 col-12 col-lg-4">
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <h5 class="mb-3 card-title">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-arrow-down"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">Installation</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Donec pede justo, fringilla vel, aliquet nec, vulputate
                                    eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-2"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="py-3 col-12 col-lg-4">
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <h5 class="mb-3 card-title">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-box fa-fw"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">APIs</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-3"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="py-3 col-12 col-lg-4">
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <h5 class="mb-3 card-title">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-cogs fa-fw"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">Integrations</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-4"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="py-3 col-12 col-lg-4">
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <h5 class="mb-3 card-title">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-tools"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">Utilities</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-5"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="py-3 col-12 col-lg-4">
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <h5 class="mb-3 card-title">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-laptop-code"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">Web</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-6"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="py-3 col-12 col-lg-4">
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <h5 class="mb-3 card-title">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-tablet-alt"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">Mobile</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-7"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="py-3 col-12 col-lg-4">
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <h5 class="mb-3 card-title">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-book-reader"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">Resources</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-8"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="py-3 col-12 col-lg-4">
                        <div class="shadow-sm card">
                            <div class="card-body">
                                <h5 class="mb-3 card-title">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-lightbulb"></i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">FAQs</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-9"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->
            </div>
            <!--//container-->
        </div>
        <!--//container-->
    </div>
    <!--//page-content-->

    <section class="py-5 text-center cta-section theme-bg-dark position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h3 class="mb-2 mb-3 text-white">Launch Your Software Project Like A Pro</h3>
            <div class="mx-auto mb-3 text-white section-intro single-col-max">Want to launch your software project and
                start getting traction from your target users? Check out our premium <a class="text-white"
                    href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/">Bootstrap
                    5 startup template CoderPro</a>! It has everything you need to promote your product.</div>
            <div class="pt-3 text-center">
                <a class="btn btn-light"
                    href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/">Get
                    CoderPro<i class="ml-2 fas fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
    </section>
    <!--//cta-section-->

    <footer class="footer">

        <div class="py-5 text-center footer-bottom">

            <ul class="pb-4 mb-0 social-list list-unstyled">
                <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
            </ul>
            <!--//social-list-->

            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a
                    class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for
                developers</small>


        </div>

    </footer>

    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="assets/js/docs.js"></script>

</body>

</html>
