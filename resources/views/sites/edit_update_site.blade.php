<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">

    <title>ARSEL - Editer et/ou modifier un site</title>

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
                                    <h1>Editer et/ou modifier un site</h1>
                                    <div class="row">
                                        <div class="mt-5 col-md-12">
                                            @if (session('error_site'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ session('error_site') }}
                                                </div>
                                            @endif
                                            @if (session('succes_site'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('succes_site') }}
                                                </div>
                                            @endif
                                            <div id="stepper2" class="bs-stepper">
                                                <div class="bs-stepper-header">
                                                    <div class="step" data-target="#test-nl-1">
                                                        <button type="button" class="btn step-trigger step1">
                                                            <span class="bs-stepper-circle">1</span>
                                                            <span class="bs-stepper-label">Informations
                                                                relative au site</span>
                                                        </button>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="step" data-target="#test-nl-2">
                                                        <div class="btn step-trigger">
                                                            <button type="button" class="btn step-trigger step2">
                                                                <span class="bs-stepper-circle">2</span>
                                                                <span class="bs-stepper-label">Reference du site</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="step" data-target="#test-nl-3">
                                                        <div class="btn step-trigger">
                                                            <button type="button" class="btn step-trigger step3">
                                                                <span class="bs-stepper-circle">3</span>
                                                                <span class="bs-stepper-label">Reference du
                                                                    régime</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="step" data-target="#test-nl-4">
                                                        <button type="button" class="btn step-trigger step4">
                                                            <span class="bs-stepper-circle">4</span>
                                                            <span class="bs-stepper-label">Validation</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                @if ($info_site->count() > 0)
                                    @foreach ($info_site as $info_site)
                                        <form name="basicform" id="basicform" action="{{ route('update_site', $info_site->ID_SITE) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div id="sf1" class="frm">
                                                <fieldset>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Libellé du site</label>
                                                            <input type="text" class="form-control validate"
                                                                id="libelle_site" name="libelle_site"
                                                                value="{{ $info_site->LIBELLE_SITE }}" required>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Capacité du
                                                                site (MW)</label>
                                                            <input type="number" class="form-control validate"
                                                                id="capacite_site" name="capacite_site"
                                                                value="{{ $info_site->CAPACITE_SITE }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Description
                                                            du site</label>
                                                        <textarea class="form-control"
                                                            id="exampleFormControlTextarea1" rows="3" id="desc_site"
                                                            name="desc_site"
                                                            required>{{ $info_site->DESCRIPTION_SITE }}</textarea>
                                                    </div>
                                                </fieldset>
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <button class="btn btn-primary open1" type="button">Next <span
                                                                class="fa fa-arrow-right"></span></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="sf2" class="frm" style="display: none;">
                                                <fieldset>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">Région</label>
                                                            <select name="region_select"
                                                                class="form-control formselect required"
                                                                id="region_select">
                                                                <option value="{{ $info_site->ID_REGION }}">
                                                                    {{ $info_site->LIBELLE_REGION }}
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
                                                            <select class="form-control" id="departement_select"
                                                                name="departement_select">
                                                                <option value="{{ $info_site->ID_DPT }}">
                                                                    {{ $info_site->LIBELLE_DEPATEMENT }}
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">Arrondissement</label>
                                                            <select class="form-control" id="arr_site"
                                                                name="arr_site">
                                                                <option value="{{ $info_site->ID_ARRONDISSEMENT }}">
                                                                    {{ $info_site->LIBELLE_ARRONDISSEMENT }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputCity">Quartier</label>
                                                            <input type="text" class="form-control" id="quartier_site"
                                                                name="quartier_site" value="{{ $info_site->LIBELLE_QUARTIER }}" >
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">Type
                                                                d'exploitation</label>
                                                            <select id="inputState" class="form-control" id="type_exp"
                                                                name="type_exp">
                                                                <option value="{{ $info_site->ID_EXPLOITANT }}">
                                                                    {{ $info_site->LIBELLE_EXPLOITANT }}
                                                                </option>
                                                                @foreach ($type_exp as $type_exp)
                                                                    <option value="{{ $type_exp->ID_EXPLOITANT }}">
                                                                        {{ $type_exp->LIBELLE_EXPLOITANT }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">Source d'énergie</label>
                                                            <select id="inputState" class="form-control" id="src_ener"
                                                                name="src_ener">
                                                                <option value="{{ $info_site->ID_SOURCE_ENR }}">
                                                                    {{ $info_site->LIBELLE_SOURCE_ENR }}
                                                                </option>
                                                                @foreach ($src_ener as $src_ener)
                                                                    <option value="{{ $src_ener->ID_SOURCE_ENR }}">
                                                                        {{ $src_ener->LIBELLE_SOURCE_ENR }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <button class="btn btn-warning back2" type="button"><span
                                                                class="fa fa-arrow-left"></span> Back</button>
                                                        <button class="btn btn-primary open2" type="button">Next <span
                                                                class="fa fa-arrow-right"></span></button>
                                                    </div>
                                                </div>

                                            </div>

                                            <div id="sf3" class="frm" style="display: none;">
                                                <fieldset>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <label for="inputState">Type de régime</label>
                                                            <select id="type_regime" name="type_regime"
                                                                class="form-control">
                                                                <option value="{{ $info_site->ID_REGIME }}">
                                                                    {{ $info_site->LIBELLE_REGIME }}
                                                                </option>
                                                                @foreach ($regime as $regime)
                                                                    <option value="{{ $regime->ID_REGIME }}">
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
                                                                <option value="{{ $info_site->ID_ACTIVITE }}">
                                                                    {{ $info_site->LIBELLE_ACTIVITE }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <button class="btn btn-warning back3" type="button"><span
                                                                class="fa fa-arrow-left"></span> Back</button>
                                                        <button class="btn btn-primary open3" type="button">Next <span
                                                                class="fa fa-arrow-right"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="sf4" class="frm" style="display: none;">
                                                <fieldset>
                                                    <div class="form-row">
                                                        <div class="upload-imgs">
                                                            <div class="img-uploade-row">
                                                                <div class="upload-column">
                                                                    <input type="hidden" name="old_image_site" value="{{ $info_site->LIBELLE_IMAGE }}"/>
                                                                    <input onchange="doAfterSelectImage(this)"
                                                                        type="file" name="image_site"
                                                                        value="{{ $info_site->LIBELLE_IMAGE }}"
                                                                        class="screenshot" id="screenshot"
                                                                        style="display:none">
                                                                    <input type="hidden" name="csrf-token"
                                                                        value="{{ csrf_token() }}" />
                                                                    <label for="screenshot" class="img-uploaders">
                                                                        <img src="{{ URL::asset('images_site/' . $info_site->LIBELLE_IMAGE) }}"
                                                                            width="50%" id="post_user_image_" />
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </fieldset>
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <button class="btn btn-warning back4" type="button"><span
                                                                class="fa fa-arrow-left"></span> Back</button>
                                                        <input class="btn btn-primary" type="submit" value="Modifier le site">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endforeach
                                @endif
                            </div>
                        </div>

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
            @include('include.footer_admin')
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
    <script src="../js/script_javascript.js"></script>
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
