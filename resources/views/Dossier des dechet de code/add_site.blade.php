<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ARSEL - Editer un adlinistrateur</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/bootstrap-4.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/bs-stepper/css/bs-stepper.min.css">
    <script src="../assets/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="../assets/fontAwesome/js/all.min.js"></script>
    <script src="../assets/bootstrap-4.6-dist/js/bootstrap.bundle.min.js"></script>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('include.menu_bar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('include.nav_bar')
                <!-- /.container-fluid -->
                <div class="page-wrapper">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Container fluid  -->
                    <!-- ============================================================== -->
                    <div class="container-fluid">
                        <!-- ============================================================== -->
                        <!-- Start Page Content -->
                        <!-- ============================================================== -->
                        <!-- Row -->
                        <div class="row">
                            <div class="pt-4 col-md-10">
                                <div class="container">
                                    <h1>Creation d'un site </h1>
                                    <div class="row">
                                        <div class="mt-5 col-md-12">
                                            <div id="stepper2" class="bs-stepper">
                                                <div class="bs-stepper-header">
                                                    <div class="step" data-target="#test-nl-1">
                                                        <button type="button" class="btn step-trigger">
                                                            <span class="bs-stepper-circle">1</span>
                                                            <span class="bs-stepper-label">Informations
                                                                relative au site</span>
                                                        </button>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="step" data-target="#test-nl-2">
                                                        <div class="btn step-trigger">
                                                            <span class="bs-stepper-circle">2</span>
                                                            <span class="bs-stepper-label">Reference du site</span>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="step" data-target="#test-nl-3">
                                                        <div class="btn step-trigger">
                                                            <span class="bs-stepper-circle">3</span>
                                                            <span class="bs-stepper-label">Reference du régime</span>
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
                                                    <form action="#" name="basicform" id="basicform">
                                                        <div id="test-nl-1" class="content">
                                                            <fieldset>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputEmail4">Libellé du site</label>
                                                                        <input type="text" class="form-control validate"
                                                                        id="uname" name="uname"
                                                                            placeholder="Libellé du site" required>
                                                                    </div>
                                                                    <span class="clearfix" style="height: 10px; color: red"></span>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputPassword4">Capacité du
                                                                            site</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputPassword4"
                                                                            placeholder="Capacité du site" required>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputPassword4">Localité du
                                                                            site</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputPassword4"
                                                                            placeholder="Localité du site" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Description
                                                                        du site</label>
                                                                    <textarea class="form-control"
                                                                        id="exampleFormControlTextarea1" rows="3"
                                                                        placeholder="Sasir une description du site"
                                                                        required></textarea>
                                                                </div>
                                                            </fieldset>
                                                            <div class="form-group">
                                                                <div class="col-lg-10 col-lg-offset-2">
                                                                  <button class="btn btn-primary open1" type="button">Next <span class="fa fa-arrow-right"></span></button>
                                                                </div>
                                                              </div>
                                                        </div>
                                                        <div id="test-nl-2" class="content">
                                                            <fieldset>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputState">Région</label>
                                                                        <select name="region_select"
                                                                            class="form-control formselect required"
                                                                            id="region_select">
                                                                            <option value="0">Choisir une région
                                                                            </option>
                                                                            @foreach ($region as $reg)
                                                                                <option value="{{ $reg->ID_REGION }}">
                                                                                    {{ $reg->LIBELLE_REGION }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputState">Département</label>
                                                                        <select class="form-control"
                                                                            id="departement_select"
                                                                            name="departement_select">
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputCity">Arrondissement</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputCity"
                                                                            placeholder="Saisir l'arondissement">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputCity">Quartier</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputCity"
                                                                            placeholder="Saisir le quartier">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputState">Type
                                                                            d'exploitation</label>
                                                                        <select id="inputState" class="form-control">
                                                                            <option selected>Choisir le type
                                                                                d'exploitation</option>
                                                                            <option>...</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputState">Source d'énergie</label>
                                                                        <select id="inputState" class="form-control">
                                                                            <option value="0">Choisir la source
                                                                                d'energie
                                                                            </option>
                                                                            @if ($src_ener->count() > 0)
                                                                                @foreach ($src_ener as $src_ener)
                                                                                    <option
                                                                                        value="{{ $src_ener->ID_SOURCE_ENR }}">
                                                                                        {{ $src_ener->LIBELLE_SOURCE_ENR }}
                                                                                    </option>
                                                                                @endforeach
                                                                            @else
                                                                                <option value="0">Choisir la source
                                                                                    d'energie
                                                                                </option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Description
                                                                        du site</label>
                                                                    <textarea class="form-control"
                                                                        id="exampleFormControlTextarea1" rows="3"
                                                                        placeholder="Sasir une description du site"
                                                                        required></textarea>
                                                                </div>
                                                            </fieldset>
                                                            <div class="d-flex">

                                                                <button class="mr-auto btn btn-primary"
                                                                    onclick="stepper2.previous()">
                                                                    <i class="fa fa-arrow-left"></i> Previous</button>
                                                                <button class="btn btn-primary"
                                                                    onclick="stepper2.next()">Next <i
                                                                        class="fa fa-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                        <div id="test-nl-3" class="content">
                                                            <fieldset>
                                                                <div class="form-row">
                                                                    <div class="col">
                                                                        <label for="inputState">Type de régime</label>
                                                                        <select id="type_regime" name="type_regime"
                                                                            class="form-control">
                                                                            <option value="0">Choisir un type de regime
                                                                            </option>
                                                                            @foreach ($regime as $regime)
                                                                                <option
                                                                                    value="{{ $regime->ID_REGIME }}">
                                                                                    {{ $regime->LIBELLE_REGIME }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="inputState">Liste des
                                                                            activités</label>
                                                                        <select id="type_activite" name="type_activite"
                                                                            class="form-control">
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="d-flex">

                                                                <button class="mr-auto btn btn-primary"
                                                                    onclick="stepper2.previous()">
                                                                    <i class="fa fa-arrow-left"></i> Previous</button>
                                                                <button class="btn btn-primary"
                                                                    onclick="stepper2.next()">Next <i
                                                                        class="fa fa-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                        <div id="test-nl-4" class="content">
                                                            <p class="text-center"><button type="submit"
                                                                    class="btn btn-primary">Soumettre</button></p>
                                                            <div class="d-flex">
                                                                <button class="mr-auto btn btn-primary"
                                                                    onclick="stepper2.previous()"><i
                                                                        class="fa fa-arrow-left"></i>
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

                        <!-- Row -->
                        <!-- ============================================================== -->
                        <!-- End PAge Content -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Right sidebar -->
                        <!-- ============================================================== -->
                        <!-- .right-sidebar -->
                        <!-- ============================================================== -->
                        <!-- End Right sidebar -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Container fluid  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->

                </div>
            </div>

            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="my-auto text-center copyright">
                        <footer class="text-center footer"> 2021 © Ample Admin brought to you by <a
                                href="https://www.wrappixel.com/">wrappixel.com</a>
                        </footer>
                        <!-- ============================================================== -->
                        <!-- End footer -->
                        <!-- ============================================================== -->
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="rounded scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/ajax_controller.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

    <script type="text/javascript">

    </script>

</body>

</html>
