<?php 
        if(session()->missing('id'))
        {
            header('Location: /Login');
            die;
        }
        elseif(session('role')=='Admin')
        {
            header('Location: /AdminDashboard');
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

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
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
                        <span class=" badge badge-warning navbar-badge" style="font-weight:bold ;"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header"> Notifications</span>

                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                            <img class="nav-icon"
                                srcset="https://img.icons8.com/material-outlined/344/error--v1.png 17x"></img>
                            Hampir Kedaluwarsa
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
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
                            <a href="/UserRekap" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Rekap Kontrak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/UserMitra" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Mitra</p>
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
            @yield('isiUser')
        </div>

    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->


    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js "></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
</body>

</html>