<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ARSEL - Profil de l'administrateur</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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

            </div>
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
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-12">
                            <div class="white-box">
                                <div class="user-bg">
                                    @if ($infos_admin->count() > 0)
                                        @foreach ($infos_admin as $infos_admin)
                                            <form class="form-horizontal form-material"
                                                action="{{ route('update_user_profile', $infos_admin->ID_USER) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="upload-imgs">
                                                    <div class="img-uploade-row">
                                                        <div class="upload-column">
                                                            <input type="hidden" name="old_image_user" value="{{ $infos_admin->PHOTO_ADMIN }}"/>
                                                            <input onchange="doAfterSelectImage(this)" type="file"
                                                                name="image_admin" class="screenshot" id="screenshot"
                                                                style="display:none">
                                                            <input type="hidden" name="csrf-token"
                                                                value="{{ csrf_token() }}" />
                                                            <label for="screenshot" class="img-uploaders">
                                                                <img src="{{ URL::asset('images_admin/' . $infos_admin->PHOTO_ADMIN) }}" width="100%"
                                                                    id="post_user_image_" />
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    @if (session('error_update'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error_update') }}
                                        </div>
                                    @endif
                                    @if (session('success_update'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success_update') }}
                                        </div>
                                    @endif
                                    <div class="mb-4 form-group">
                                        <label class="p-0 col-md-12">Nom</label>
                                        <div class="p-0 col-md-12 border-bottom">
                                            <input type="text" value="{{ $infos_admin->NOM }}" name="nom_admin"
                                                class="p-0 border-0 form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label class="p-0 col-md-12">Prenom</label>
                                        <div class="p-0 col-md-12 border-bottom">
                                            <input type="text" value="{{ $infos_admin->PRENOM }}" name="prenom_admin"
                                                class="p-0 border-0 form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label for="example-email" class="p-0 col-md-12">Adresse
                                            email</label>
                                        <div class="p-0 col-md-12 border-bottom">
                                            <input type="email" value="{{ $infos_admin->EMAIL }}"
                                                class="p-0 border-0 form-control" name="email_admin" id="example-email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label class="p-0 col-md-12">Numero de téléphone</label>
                                        <div class="p-0 col-md-12 border-bottom">
                                            <input type="number" value="{{ $infos_admin->TELEPHONE }}"
                                                name="phone_admin" class="p-0 border-0 form-control">
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label class="p-0 col-md-12">Ancien mot
                                            de passe</label>
                                        <div class="p-0 col-md-12 border-bottom">
                                            <input type="password" name="old_pass_admin"
                                                class="p-0 border-0 form-control">
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label class="p-0 col-md-12">Nouveau
                                            mot de passe</label>
                                        <div class="p-0 col-md-12 border-bottom">
                                            <input type="password" name="new_pass_admin"
                                                class="p-0 border-0 form-control">
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label for="example-email" class="p-0 col-md-12">Confirmer le
                                            mot de passe</label>
                                        <div class="p-0 col-md-12 border-bottom">
                                            <input type="password" class="p-0 border-0 form-control"
                                                name="confirm_pass_admin" id="example-email">
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary">Modifier le Profil</button>
                                        </div>
                                    </div>
                                    </form>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
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

                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
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

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/ajax_controller.js"></script>
    <script src="../js/script_javascript.js"></script>

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

</body>

</html>
