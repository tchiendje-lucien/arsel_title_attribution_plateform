<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARSEL - Actualité sur les sites</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Bootstrap 4 Template For Software Startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="../assets/fontawesome/js/all.min.js"></script>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="../assets/plugins/simplelightbox/simple-lightbox.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link href="../css/carousel.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/theme.css">

</head>

<body class="docs-page">
    <header class="header fixed-top" style="background-color: #86A1DB">
        <div class="branding docs-branding">
            <div class="py-2 container-fluid position-relative">
                <div class="docs-logo-wrapper">
                    <button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none"
                        type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="site-logo"><a class="navbar-brand" href="index.html"><img class="logo-icon me-2"
                                src="assets/images/coderdocs-logo.svg" alt="logo"><span class="logo-text">ARSEL<span
                                    class="text-alt"></span></span></a></div>
                </div>
                <!--//docs-logo-wrapper-->
                <div class="docs-top-utilities d-flex justify-content-end align-items-center">
                    <div class="top-search-box d-none d-lg-flex">
                        <form class="search-form">
                            <input type="text" placeholder="Search the docs..." name="search"
                                class="form-control search-input">
                            <button type="submit" class="btn search-btn" value="Search"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <ul class="mb-0 social-list list-inline mx-md-3 mx-lg-5 d-none d-lg-flex">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
                    </ul>
                    <!--//social-list-->
                    <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderdocs-free-bootstrap-5-documentation-template-for-software-projects/"
                        class="btn btn-primary d-none d-lg-flex">Connexion</a>
                </div>
                <!--//docs-top-utilities-->
            </div>
            <!--//container-->
        </div>
        <!--//branding-->
    </header>
    <!--//header-->


    <div class="docs-wrapper">
        <div id="docs-sidebar" class="docs-sidebar" style="background-color: #13357d">
            <div class="p-3 top-search-box d-lg-none">
                <form class="search-form">
                    <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <nav id="docs-nav" class="docs-nav">
                <ul class="pb-3 section-items list-unstyled nav flex-column">
                    <li class="nav-item section-title">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="docs-content">
            <div class="container marketing">
                @include('include.site_card')
            </div>
        </div>
    </div>


    <!-- Javascript -->
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>


    <!-- Page Specific JS -->
    <script src="../assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="../assets/js/highlight-custom.js"></script>
    <script src="../assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="../assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="../assets/js/docs.js"></script>

</body>

</html>
