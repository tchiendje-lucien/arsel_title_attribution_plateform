<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARSEL -Acceuil</title>

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
    <link rel="stylesheet" href="../assets/bootstrap-4.6-dist/css/bootstrap.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/theme.css">

</head>

<body class="docs-page">

    @include('include.user_nav_bar')
    <!--//header-->


    <div class="docs-wrapper">
        <div id="docs-sidebar" class="docs-sidebar" style="background-color: #13357d">
            <div class="p-3 top-search-box d-lg-none">
                <form class="search-form">
                    <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="p-3 top-search-box d-lg-none">
                <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/" style="color: white">Acceuil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                            Lois et reglement
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/documentation-regime">Regime</a></li>
                            <li><a class="dropdown-item" href="/documentation-juridiction">Texte juridique</a></li>
                            <li><a class="dropdown-item" href="#">Procedure</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" style="color: white">Nous
                            contacter</a>
                    </li>
                </ul>
            </div>
            <nav id="docs-nav" class="docs-nav">
                <ul class="pb-3 section-items list-unstyled nav flex-column">
                    <li class="nav-item section-title">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selectionnez une région</option>
                            <option value="0">Tout afficher</option>
                            @foreach ($region as $reg)
                                <option value="{{ $reg->ID_REGION }}">
                                    {{ $reg->LIBELLE_REGION }}
                                </option>
                            @endforeach
                        </select>
                    </li>
                    <li class="nav-item section-title">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selectionnez une régime</option>
                            <option value="0">Tout afficher</option>
                            @foreach ($regime as $regime)
                                <option value="{{ $regime->ID_REGIME }}">
                                    {{ $regime->LIBELLE_REGIME }}
                                </option>
                            @endforeach
                        </select>
                    </li>

                </ul>

            </nav>
        </div>
        <div class="docs-content">
            <div class="container marketing">
                @include('include.site_card')
            </div>
            <div class="d-flex justify-content-center">
                {!! $info_site->links('vendor.pagination.bootstrap-4') !!}
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
