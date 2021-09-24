<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Importations fichiers bootstrap & fontawesome -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Assets/bootstrap-4.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="Assets/bs-stepper/css/bs-stepper.min.css">
    <script src="Assets/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="Assets/fontAwesome/js/all.min.js"></script>
    <script src="Assets/bootstrap-4.6-dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Navbar content -->
        <a class="navbar-brand" href="#">Logo</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Document</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>

            </ul>
        </div>

        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="my-0 btn btn-outline-secondary my-sm-0" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"> <button
                        class="text-white btn btn-primary rounded-pill btn-sm">Login</button></a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row sidebar">
            <div class="p-0 m-0 col-md-2 sidebar collapse d-md-flex bg-faded bg-secondary">

                <ul class="m-0 text-center nav nav-pills flex-column menu-gauche w-100">
                    <li class="nav-item"><a class="nav-link" href="#">Menu1</a></li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse"
                            data-target="#submenu1">Reports </a>
                        <div class="collapse" id="submenu1" aria-expanded="false">
                            <ul class="pl-2 flex-column nav">
                                <li class="nav-item"><a class="py-0 nav-link" href="">Orders</a></li>
                                <li class="nav-item">
                                    <a class="py-0 nav-link" href="#submenu1sub1">Customers</a>
                                    <!-- div class="collapse small" id="submenu1sub1" aria-expanded="false">
                                                    <ul class="pl-4 flex-column nav">
                                                        <li class="nav-item">
                                                            <a class="p-0 nav-link" href="">
                                                                <i class="fa fa-fw fa-clock-o"></i> Daily
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="p-0 nav-link" href="">
                                                                <i class="fa fa-fw fa-dashboard"></i> Dashboard
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="p-0 nav-link" href="">
                                                                <i class="fa fa-fw fa-bar-chart"></i> Charts
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="p-0 nav-link" href="">
                                                                <i class="fa fa-fw fa-compass"></i> Areas
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div -->
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Analytics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Export</a></li>
                </ul>
            </div>
            <div class="pt-4 col-md-10">
                <div class="container">
                    <h1>Legend</h1>
                    <div class="row">
                        <div class="mt-5 col-md-12">
                            <div id="stepper2" class="bs-stepper">
                                <div class="bs-stepper-header">
                                    <div class="step" data-target="#test-nl-1">
                                        <button type="button" class="btn step-trigger">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Informations Personnels</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#test-nl-2">
                                        <div class="btn step-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Info Professionels</span>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#test-nl-3">
                                        <div class="btn step-trigger">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">Checking</span>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#test-nl-4">
                                        <button type="button" class="btn step-trigger">
                                            <span class="bs-stepper-circle">4</span>
                                            <span class="bs-stepper-label">Validation</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bs-stepper-content">
                                    <form action="#">
                                        <div id="test-nl-1" class="content">
                                            <fieldset>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="First name">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="Last name">
                                                    </div>
                                                </div>
                                                <div class="my-4 form-row">
                                                    <div class="col">
                                                        <input type="email" class="form-control" placeholder="email">
                                                    </div>
                                                    <div class="col">
                                                        <input type="password" class="form-control"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="flex-row-reverse d-flex">
                                                <button class="btn btn-primary" onclick="stepper2.next()">Next <i
                                                        class="fa fa-arrow-right"></i></button>

                                            </div>
                                        </div>
                                        <div id="test-nl-2" class="content">
                                            <fieldset>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="Adresse">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="Poste Souhaité">
                                                    </div>
                                                </div>
                                                <div class="my-4 form-row">
                                                    <div class="col">
                                                        <input type="email" class="form-control"
                                                            placeholder="email-professionel">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="Horraires">
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="d-flex">

                                                <button class="mr-auto btn btn-primary" onclick="stepper2.previous()">
                                                    <i class="fa fa-arrow-left"></i> Previous</button>
                                                <button class="btn btn-primary" onclick="stepper2.next()">Next <i
                                                        class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                        <div id="test-nl-3" class="content">
                                            <fieldset>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="Adresse">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="Poste Souhaité">
                                                    </div>
                                                </div>
                                                <div class="my-4 form-row">
                                                    <div class="col">
                                                        <input type="email" class="form-control"
                                                            placeholder="email-professionel">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="Horraires">
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="d-flex">

                                                <button class="mr-auto btn btn-primary" onclick="stepper2.previous()">
                                                    <i class="fa fa-arrow-left"></i> Previous</button>
                                                <button class="btn btn-primary" onclick="stepper2.next()">Next <i
                                                        class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                        <div id="test-nl-4" class="content">
                                            <p class="text-center"><button type="submit"
                                                    class="btn btn-primary">Soumettre</button></p>
                                            <div class="d-flex">
                                                <button class="mr-auto btn btn-primary"
                                                    onclick="stepper2.previous()"><i class="fa fa-arrow-left"></i>
                                                    Previous</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>




            </div>

        </div>
    </div>


    <script>
        var stepper2Node = document.querySelector('#stepper2')

        stepper2Node.addEventListener('shown.bs-stepper', function(event) {
            console.warn('shown.bs-stepper', event)
        })

        var stepper2 = new Stepper(document.querySelector('#stepper2'), {
            linear: false,
            animation: true
        })
    </script>

    <script>
        (function() {
            'use strict'

            window.stepper1 = new Stepper(document.querySelector('#stepper1'))
            window.stepper2 = new Stepper(document.querySelector('#stepper2'), {
                linear: false,
                animation: true
            })

            var stepperFormEl = document.querySelector('#stepperForm')
            window.stepperForm = new Stepper(stepperFormEl, {
                animation: true
            })

            var btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'))
            var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'))
            var inputMailForm = document.getElementById('inputMailForm')
            var inputPasswordForm = document.getElementById('inputPasswordForm')
            var form = stepperFormEl.querySelector('.bs-stepper-content form')

            btnNextList.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    window.stepperForm.next()
                })
            })

            stepperFormEl.addEventListener('show.bs-stepper', function(event) {
                form.classList.remove('was-validated')
                var nextStep = event.detail.indexStep
                var currentStep = nextStep

                if (currentStep > 0) {
                    currentStep--
                }

                var stepperPan = stepperPanList[currentStep]

                if ((stepperPan.getAttribute('id') === 'test-form-1' && !inputMailForm.value.length) ||
                    (stepperPan.getAttribute('id') === 'test-form-2' && !inputPasswordForm.value.length)) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                }
            })
        })()
    </script>

</body>

</html>
