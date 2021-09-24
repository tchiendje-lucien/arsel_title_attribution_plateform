<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ARSEL - gérer un adlinistrateur</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
    <link href="./vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


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
                    <div class="container-fluid">
                        <div class="mb-4 shadow card">
                            <div class="py-3 card-header">
                                <h6 class="m-0 font-weight-bold text-primary">Gerer les administrateur</h6>
                            </div>
                            <div class="card-body">

                                <form class="form-horizontal form-material" action="{{ URL::to('/store_admin') }}"
                                    method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    @if (session('user_error'))
                                        <div class="alert alert-danger" role="alert">{{ session('user_error') }}
                                        </div>
                                    @endif
                                    @if (session('empty_input'))
                                        <div class="alert alert-danger" role="alert">{{ session('empty_input') }}
                                        </div>
                                    @endif
                                    @if (session('success_create'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success_create') }}
                                        </div>
                                    @endif
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="mb-4 form-group">
                                                <label class="p-0 col-md-12">Nom</label>
                                                <div class="p-0 col-md-12 border-bottom">
                                                    <input type="text" class="p-0 border-0 form-control"
                                                        name="nom_admin" value="{{ old('nom_admin') }}" required>
                                                    @if (session('name_error'))
                                                        <span class="text-danger">
                                                            {{ session('name_error ') }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4 form-group">
                                                <label class="p-0 col-md-12">Prenom</label>
                                                <div class="p-0 col-md-12 border-bottom">
                                                    <input type="text" class="p-0 border-0 form-control"
                                                        name="prenom_admin" value="{{ @old('prenom_admin') }}"
                                                        required>
                                                    @if (session('prenom_error'))
                                                        <span class="text-danger">
                                                            {{ session('prenom_error') }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4 form-group">
                                                <label class="p-0 col-md-12">Email</label>
                                                <div class="p-0 col-md-12 border-bottom">
                                                    <input type="email" class="p-0 border-0 form-control"
                                                        name="email_admin" value="{{ @old('email_admin') }}" required>
                                                    <input type="hidden" name="csrf-token"
                                                        value="{{ csrf_token() }}" />
                                                    @if (session('email_error'))
                                                        <span class="text-danger">
                                                            {{ session('email_error') }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @if ($departement)
                                            <div class="col-md-4">
                                                <div class="mb-4 form-group">
                                                    <label class="p-0 col-md-12">Departement</label>
                                                    <div class="p-0 col-md-12 border-bottom">
                                                        <select
                                                            class="p-0 border-0 shadow-none form-select form-control-line"
                                                            name="dept_admin">
                                                            @foreach ($departement as $dept)
                                                                <option value={{ $dept->ID_DPT }}>
                                                                    {{ $dept->LIBELLE_DPT }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($roles)
                                            <div class="col-md-4">
                                                <div class="mb-4 form-group">
                                                    <label class="p-0 col-md-12">Role</label>
                                                    <div class="p-0 col-md-12 border-bottom">
                                                        <select
                                                            class="p-0 border-0 shadow-none form-select form-control-line"
                                                            name="role_admin">
                                                            @foreach ($roles as $role)
                                                                <option value={{ $role->ID_ROLE }}>
                                                                    {{ $role->LIBELLE_ROLE }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="mb-4 form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-primary" value="Ajouter">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>Departement</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>Departement</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @if ($users->count() > 0)
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $user->NOM }}</td>
                                                        <td>{{ $user->PRENOM }}</td>
                                                        <td>{{ $user->EMAIL }}</td>
                                                        <td>{{ $user->LIBELLE_DPT }}</td>
                                                        <td>{{ $user->LIBELLE_ROLE }}</td>
                                                        <td>
                                                            <a href="edit-admin/{{ $user->ID_USER }}">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-target="#staticBackdrop">
                                                                    Editer
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
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


    <!-- Page level custom scripts -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
</body>

</html>
