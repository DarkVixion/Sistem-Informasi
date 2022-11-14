<?php 
    if(session()->missing('id'))
    {
        header('Location: /Login');
        die;
    }
    elseif(session('role')!='Admin')
    {
        header('Location: /UserRekap');
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    @yield('lib_tambahan')
    <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" style="padding-top: 29%;">
                        <img src="https://cdn-icons-png.flaticon.com/128/3119/3119338.png"
                            data-src="https://cdn-icons-png.flaticon.com/128/3119/3119338.png" alt="Notification "
                            title="Notification " width="25" height="25" class="lzy lazyload--done"
                            srcset="https://cdn-icons-png.flaticon.com/128/3119/3119338.png 4x">
                        <!-- <i class="far fa-bell fa-2x"> </i> -->
                        <!-- https://www.flaticon.com/free-icon/notification_3119338 -->
                        <span class=" badge badge-warning navbar-badge"
                            style="font-weight:bold ;">{{ count(session('mou')) }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">{{ count(session('mou')) }} Notifications</span>
                        @foreach(session('mou') as $d)
                        <div class="dropdown-divider"></div>
                        <a href="{{route('edit_kerjasama', $d->tambah_kerjasama_id)}}" class="dropdown-item">
                            <img class="nav-icon"
                                srcset="https://img.icons8.com/material-outlined/344/error--v1.png 17x"></img>
                            Hampir Kedaluwarsa - {{ $d->Judul }}
                        </a>
                        @endforeach
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <!-- profile -->
                <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                    <div class="image" style="padding-top:3%">
                        <img src=" {{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image" style="padding-top: 28%">
                    </div>
                    <div class="info" style="padding-top: 7%">
                        <a href="/Akun" class="d-block" style="padding-top:5%">@if(session()->has('id'))
                            {{session('name')}} @else
                            ???
                            @endif</a>
                    </div>
                    <div class=" info">
                        <a href="/Logout" class="nav-link">
                            <img class="nav-icon" style="opacity: 55%; width: 18px;"
                                srcset="https://cdn-icons-png.flaticon.com/512/1286/1286853.png 2x" width="1rem"
                                height="1rem" alt="exit icon" loading="lazy">
                        </a>
                    </div>
                </div>

            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-5 pb-5 mb-5 d-flex">
                    <div>
                        <img src="{{ asset ('dist/img/Head Logo.png') }}" alt="User Image" style="width:100%;">
                    </div>

                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="/AdminDashboard" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Master Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <ul class="nav-item">
                                    <a href="/NamaMitra" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nama Mitra</p>
                                    </a>
                                </ul>
                                <ul class="nav-item">
                                    <a href="/JenisMitra" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jenis Mitra</p>
                                    </a>
                                </ul>
                                <ul class="nav-item">
                                    <a href="/LingkupKerja" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lingkup Kerja Sama</p>
                                    </a>
                                </ul>
                                <ul class="nav-item">
                                    <a href="/Mitra" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile Mitra</p>
                                    </a>
                                </ul>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/Kerjasama" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Rekap Kontrak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/AdminShowUser" class="nav-link">
                                <img class="nav-icon" style="opacity: 55%"
                                    srcset="https://cdn-icons-png.flaticon.com/128/848/848006.png 2.5x"
                                    alt="Building icon" loading="lazy"></img>
                                <p>User</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('isiAdmin')
        </div>

    </div>
    <!-- /.content-wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js "></script>
    <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script><!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
</body>

</html>