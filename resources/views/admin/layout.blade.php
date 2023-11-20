<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>admin - SKH Salsabilah</title>

    <link rel="icon" href="<?= url('/') . '/back/gambar/logo.png' ?>" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?= url('/') ?>/back/dist/sweetalert/dist/sweetalert2.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= url('/') . '/back/gambar/logo.png'; ?>" alt="PT Artha Medika Persada" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= url('/') . '/logout.html'; ?>" class="nav-link">Logout</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="<?= url('/') . '/back/gambar/logo.png' ?>" alt="AdminLTE Logo" class="brand-image">
                <span class="brand-text font-weight-light">SKH Salsabilah</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= url('/') . '' ?>/back/dist/img/admin.png" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ $nama }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= url('/') . 'admin/index.html' ?>" class="nav-link <?= ($activemenu == 'dashboard') ? 'active' : '' ?>">
                                <i class="nav-icon nav-icon fas fa-table"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?= ($activemenu == 'master') ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= ($activemenu == 'master') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Data Master
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= url('/') . '/admin/siswa.html' ?>" class="nav-link <?= ($activesubmenu == 'siswa') ? 'active' : '' ?>">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= url('/') . '/admin/gallery.html' ?>" class="nav-link <?= ($activesubmenu == 'gallery') ? 'active' : '' ?>">
                                        <i class="fas fa-camera nav-icon"></i>
                                        <p>Gallery</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= url('/') . '/admin/agenda.html' ?>" class="nav-link <?= ($activesubmenu == 'agenda') ? 'active' : '' ?>">
                                        <i class="far fa-calendar-alt nav-icon"></i>
                                        <p>Agenda</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= url('/') . '/admin/profile.html' ?>" class="nav-link <?= ($activesubmenu == 'profile_sekolah') ? 'active' : '' ?>">
                                        <i class="fas fa-home nav-icon"></i>
                                        <p>Profile Sekolah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; 2023 Sekolah.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= url('/') ?>/back/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= url('/') ?>/back/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= url('/') ?>/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= url('/') ?>/back/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <!-- <script src="plugins/sparklines/sparkline.js"></script> -->

    <!-- DataTables  & Plugins -->
    <script src="<?= url('/') ?>/back/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/jszip/jszip.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Select2 -->
    <script src="<?= url('/') ?>/back/plugins/select2/js/select2.full.min.js"></script>

    <!-- JQVMap -->
    <script src="<?= url('/') ?>/back/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= url('/') ?>/back/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= url('/') ?>/back/plugins/moment/moment.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= url('/') ?>/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= url('/') ?>/back/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= url('/') ?>/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= url('/') ?>/back/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="dist/js/pages/dashboard.js"></script> -->

    <script src="<?= url('/') ?>/back/dist/sweetalert/dist/sweetalert2.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            $('#tanggal').datetimepicker({
                format: 'DD/MM/YYYY'
            });
        })
    </script>

    <?php if ($activemenu == 'master' && $activesubmenu == 'siswa') : ?>
        <script src="<?= url('/') ?>/back/js/siswa.js"></script>
    <?php elseif ($activemenu == 'master' && $activesubmenu == 'gallery') : ?>
        <script src="<?= url('/') ?>/back/js/gallery.js"></script>
    <?php elseif ($activemenu == 'master' && $activesubmenu == 'agenda') : ?>
        <script src="<?= url('/') ?>/back/js/agenda.js"></script>
    <?php elseif ($activemenu == 'master' && $activesubmenu == 'profile') : ?>
        <script src="<?= url('/') ?>/back/js/profile.js"></script>
    <?php endif; ?>

</body>

</html>