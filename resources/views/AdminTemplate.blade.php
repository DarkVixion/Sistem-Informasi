<!DOCTYPE html>
<head>
    <!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- IonIcons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <!-- PreLoader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/logo UP.jpeg" alt="AdminLTELogo" height="350" width="400">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">2 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="/UserInformasiMitra" class="dropdown-item">
                            <img class="nav-icon" srcset="https://img.icons8.com/material-outlined/344/error--v1.png 17x"></img> Hampir Kedaluwarsa - nama MOU
                            <span class="float-right text-muted text-sm">D-5</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/UserInformasiMitra" class="dropdown-item">
                            <img class="nav-icon" srcset="https://img.icons8.com/material-outlined/344/error--v1.png 17x"></img> Lengkapi Dokumen - nama kerja sama
                            <span class="float-right text-muted text-sm">D-5</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <!-- profile -->
                <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/Akun" class="d-block">Admin123</a>
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
                        <img src="dist/img/Head Logo.png" alt="User Image" style="width:100%;">
                    </div>

                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                                <li class="nav-item">
                                    <a href="/JenisMitra" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jenis Mitra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/LingkupKerja" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lingkup Kerja Sama</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/Kerjasama" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Kerjasama</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Mitra" class="nav-link">
                                <img class="nav-icon" style="opacity: 75%" srcset="https://img.icons8.com/offices/2x/building.png 2.5x" alt="Building icon" loading="lazy"></img>
                                <p>Mitra</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/AdminUserMenu" class="nav-link">
                                <img class="nav-icon" style="opacity: 75%" srcset="https://img.icons8.com/offices/2x/building.png 2.5x" alt="Building icon" loading="lazy"></img>
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

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
</body>

</html>