<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARSEL - Liste des sites</title>

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
    <link rel="stylesheet" href="../css/mes_style.css">
    <link rel="stylesheet" href="../assets/bootstrap-4.6-dist/css/bootstrap.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/theme.css">




    <style type="text/css">
        .card {
            overflow: hidden;
            border-radius: 6px;
            position: relative;
            background-color: #FFFFFF;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
            margin-bottom: 30px;
        }

        .card-small .thumbnail {
            min-height: 200px;
        }

        .card .thumbnail {
            border: 0 none;
            padding: 0;
            margin: 0;
            min-height: 270px;
            position: relative;
        }

        .card .thumbnail img {
            width: 100%;
        }

        .card .thumb-cover {
            padding: 15px 20px;
            height: 100%;
            top: 0;
            position: absolute;
            bottom: 0;
            opacity: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
        }

        .thumb-cover {
            transition: all 0.2s ease 0s;
            -webkit-transition: all 0.2s ease 0s;
        }

        .card .details {
            background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…IgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
            background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.75)), color-stop(62%, rgba(0, 0, 0, 0.36)), color-stop(100%, rgba(0, 0, 0, 0)));
            background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
            background: -o-linear-gradient(top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
            background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.36) 62%, rgba(0, 0, 0, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5e000000', endColorstr='#00000000', GradientType=0);
            top: 0;
            display: block;
            height: 60px;
            padding: 10px 15px 0;
            position: absolute;
            width: 100%;
        }

        .card .user {
            font-weight: 400;
            color: #FFFFFF;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.23);
            line-height: 20px;
            display: block;
        }

        .hidden {
            display: none !important;
            visibility: hidden !important;
        }

        .card .user .user-photo {
            width: 35px;
            height: 35px;
            border: 2px solid #FFFFFF;
            border-radius: 50%;
            overflow: hidden;
            float: left;
        }

        .card .user .name {
            line-height: 35px;
            margin-left: 10px;
            font-size: 16px;
            float: left;
        }

        .card .numbers {
            color: #FFFFFF;
            float: right;
            margin-top: 6px;
        }

        .card .numbers .downloads,
        .card .numbers .comments-icon {
            margin-left: 6px;
            font-size: 15px;
            font-weight: 500;
        }

        .card .numbers .fa {
            font-size: 18px;
        }

        .card .numbers .downloads,
        .card .numbers .comments-icon {
            margin-left: 6px;
            font-size: 15px;
            font-weight: 500;
        }

        .card-info {
            background-color: #FFFFFF;
            position: relative;
            height: 120px;
        }

        .card-info {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
        }

        .card-info .moving {
            padding: 15px;
            background-color: #FFFFFF;
            position: relative;
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            -o-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            -moz-animation-fill-mode: both;
            -o-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: returnBounce;
            -moz-animation-name: returnBounce;
            -ms-animation-name: returnBounce;
            -o-animation-name: returnBounce;
            animation-name: returnBounce;
        }

        .card-info a {
            color: #434343;
        }

        .card-small .card-info h3 {
            font-size: 18px;
        }

        .card-info h3 {
            margin-top: 0;
            font-size: 22px;
        }

        .card-info h3 {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
        }

        .card-info p {
            font-size: 14px;
            font-style: italic;
            margin: 0;
            color: #666666;
            height: 60px;
        }

        .card-small .actions {
            height: 55px;
            font-size: 14px;
        }

        .card .actions {
            background-color: #FFFFFF;
            bottom: -80px;
            color: rgba(33, 33, 33, 0.79);
            display: block;
            height: 80px;
            left: 0;
            opacity: 1;
            position: absolute;
            text-align: center;
            width: 100%;
            font-size: 18px;
        }

        .card-info .actions a {
            color: #777777;
        }

        .card .actions a {
            font-weight: 400;
        }

        .card .separator {
            padding: 0 7px;
            font-weight: 400;
            color: #CCCCCC;
        }

        .card-info .actions .blue-text {
            color: #00bbff;
        }

        a,
        a:hover,
        a:focus,
        .btn:focus,
        .btn:hover,
        .btn:active,
        .btn:active:focus,
        .btn:active.focus,
        .btn.active:focus,
        .btn.active.focus {
            text-decoration: none;
            outline: 0;
            outline-color: transparent;
            outline-style: none;
        }

    </style>

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
                        <a class="nav-link" aria-current="page" href="/">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/les-site">Nos sites</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Documentation
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/documentation-juridiction">Texte juridique</a></li>
                            <li><a class="dropdown-item" href="/documentation-regime">Les Regime</a></li>
                            <li><a class="dropdown-item" href="/procedure-investissement">Procedure</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nous contact</a>
                    </li>
                </ul>
            </div>
            <nav id="docs-nav" class="docs-nav">
                <ul class="pb-3 section-items list-unstyled nav flex-column">
                    <li class="nav-item section-title">
                        <label for="inputState" style="color:white">Région</label>
                        <select class="form-select" aria-label="Default select example" name="region_select"
                            id="region_select">
                            <option selected>Selectionnez une région</option>
                            @foreach ($region as $reg)
                                <option value="{{ $reg->ID_REGION }}">
                                    {{ $reg->LIBELLE_REGION }}
                                </option>
                            @endforeach
                        </select>
                    </li>
                    <li class="nav-item section-title">
                        <label for="inputState" style="color:white">Départements</label>
                        <select class="form-select" aria-label="Default select example" name="departement_select"
                            id="departement_select">
                            <option selected>Auccun element</option>
                        </select>
                    </li>
                    </li>
                    <li class="nav-item section-title">
                        <label for="inputState" style="color:white">Arrondissements</label>
                        <select class="form-select" aria-label="Default select example" name="arr_site"
                            id="arr_site">
                            <option selected>Auccun element</option>
                        </select>
                    </li>
                    </li>
                    <hr style="color:white">
                    <br>
                    <li class="nav-item section-title">
                        <label for="inputState" style="color:white">Régimes</label>
                        <select class="form-select" aria-label="Default select example" name="type_regime"
                            id="type_regime">
                            <option selected>Selectionnez une régime</option>
                            @foreach ($regime as $regime)
                                <option value="{{ $regime->ID_REGIME }}">
                                    {{ $regime->LIBELLE_REGIME }}
                                </option>
                            @endforeach
                        </select>
                    </li>
                    <li class="nav-item section-title">
                        <label for="inputState" style="color:white">Activités</label>
                        <select class="form-select" aria-label="Default select example" name="type_activite"
                            id="type_activite">
                            <option selected>Auccun element</option>
                        </select>
                    </li>
                    </li>

                </ul>

            </nav>
        </div>
        <div class="docs-content">
            <div class="loader" style="margin-top:15%">
                <img src="../images/loader.gif" alt="" style=" margin-left:40%">
            </div>
            <div class="container marketing">
                <div class="container">
                    <div class="row" name="site_filter" id="site_filter">
                        @include('include.site_card')

                        <div class="d-flex justify-content-center">
                            {{ $info_site->links('pagination::bootstrap-4') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/ajax_controller.js"></script>
    <script src="../js/script_javascript.js"></script>


    <!-- Page Specific JS -->
    <script src="../assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="../assets/js/highlight-custom.js"></script>
    <script src="../assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="../assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="../assets/js/docs.js"></script>

    <script>
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>

</body>

</html>
