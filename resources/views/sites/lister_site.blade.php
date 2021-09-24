<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ARSEL - Lister les sites</title>

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


                    <div class="container-fluid">
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
                        <div class="mb-4 shadow card">
                            <div class="py-3 card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Liste de tous les sites</h6>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Libelle du site</th>
                                                <th>Potentiel de production</th>
                                                <th>Localité</th>
                                                <th>Régime</th>
                                                <th>Type d'exploitation</th>
                                                <th>Source d'energie</th>
                                                <th>Etat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Libelle du site</th>
                                                <th>Potentiel de production</th>
                                                <th>Localité</th>
                                                <th>Régime</th>
                                                <th>Type d'exploitation</th>
                                                <th>Source d'energie</th>
                                                <th>Etat</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($info_site as $info_site)
                                                <tr>
                                                    <td>{{ $info_site->LIBELLE_SITE }}</td>
                                                    <td>{{ $info_site->CAPACITE_SITE }} MW</td>
                                                    <td>{{ $info_site->LIBELLE_REGION }},
                                                        {{ $info_site->LIBELLE_DEPATEMENT }},
                                                        {{ $info_site->LIBELLE_ARRONDISSEMENT }},
                                                        {{ $info_site->LIBELLE_QUARTIER }}</td>
                                                    <td>{{ $info_site->LIBELLE_REGIME }}</td>
                                                    <td>{{ $info_site->LIBELLE_ACTIVITE }}</td>
                                                    <td>{{ $info_site->LIBELLE_SOURCE_ENR }}</td>
                                                    <td>
                                                        @if ($info_site->IS_ACTIVATE == 0)
                                                            Spprimer
                                                        @else
                                                            Publier
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/create_update_site/{{ $info_site->ID_SITE }}">
                                                            <button type="button" class="btn btn-primary"
                                                                data-target="#staticBackdrop">
                                                                Editer
                                                            </button>
                                                        </a><br>
                                                        @if ($info_site->IS_ACTIVATE == 1)
                                                            <a href="/delete_site/{{ $info_site->ID_SITE }}">
                                                                <button type="button" class="btn btn-danger"
                                                                    data-target="#staticBackdrop">
                                                                    Supprimer
                                                                </button>
                                                            </a>
                                                        @else
                                                            <a href="/activate_site/{{ $info_site->ID_SITE }}">
                                                                <button type="button" class="btn btn-success"
                                                                    data-target="#staticBackdrop">
                                                                    Activer
                                                                </button>
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
