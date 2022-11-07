<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Kerja Sama | Universitas Pertamina</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

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
                        <span class=" badge badge-warning navbar-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">2 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="/UserInformasiMitra" class="dropdown-item">
                            <img class="nav-icon"
                                srcset="https://img.icons8.com/material-outlined/344/error--v1.png 17x"></img> Hampir
                            Kedaluwarsa - nama MOU
                            <span class="float-right text-muted text-sm">D-5</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/UserInformasiMitra" class="dropdown-item">
                            <img class="nav-icon"
                                srcset="https://img.icons8.com/material-outlined/344/error--v1.png 17x"></img> Lengkapi
                            Dokumen - nama kerja sama
                            <span class="float-right text-muted text-sm">D-5</span>
                        </a>
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
                            Admin123
                            @endif</a>
                    </div>
                    <div class=" info">
                        <a href="/Logout" class="nav-link" style="padding-top: 14px;">
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
                        <img src="dist/img/Head Logo.png" alt="User Image" style="width:100%;">
                    </div>

                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="AdminDashboard" class="nav-link">
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
                            <a href="Kerjasama" class="nav-link">
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

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid" style="padding-top: 1.5%">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tambah Mitra</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/Mitra">Mitra</a></li>
                                <li class="breadcrumb-item active">Tambah Mitra</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!--
                <button id="myBtn" disabled="true;">My Button</button>
                <br><br>


                <button onclick="enableBtn()">Enable "My Button"</button>
                /.container-fluid -->

            </section>
            <!-- /.container-fluid -->
            <section class="content">
                <form class="form-horizontal" action="{{route('tambah_mitra')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <!-- form start -->
                        <div class=" card-body">
                            <h3 style="text-align: center;">Kerja Sama</h3>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="select" class="col-sm-2 col-form-label">Status</label>
                                        <select class="form-control" name="status">
                                            <option>Aktif</option>
                                            <option>Tidak Aktif</option>
                                            <option>Kadarluwasa</option>
                                            <option>Dalam Penjajakan</option>
                                            <option>Perpanjangan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input" class="col-sm-2 col-form-label">Nama Mitra</label>
                                        <div class="col-sm-13">
                                            <input type="text" class="form-control" name="namamitra"
                                                placeholder="Masukan Nama Mitra">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="select" class="col-sm-2 col-form-label">Jenis Mitra</label>
                                        <select class="form-control" name="jenismitra">
                                            @foreach ($jm as $item)
                                            <option>{{ $item->juduljenismitra }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword3 " class="col-sm-4 col-form-label ">Bulan
                                            Pencatatan</label>
                                        <div class="col-sm-13">
                                            <input type="month" class="form-control " name="bulaninput">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Alamat</label>
                                    <input type="text" class="form-control " name="alamat" placeholder="Masukan Alamat" ">
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Website</label>
                                        <input type="url" class="form-control " name="website"
                                            placeholder="Masukan Website">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword3 " class="col-sm-4 col-form-label ">Nomor
                                            Telephone</label>
                                        <input type="number" class="form-control " name="notelpmitra"
                                            placeholder="Masukan Nomor Telephone" pattern="/^-?\d+\.?\d*$/"
                                            onKeyPress="if(this.value.length==15) return false;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Negara</label>
                                        <div class="col-sm-13">
                                            <input type="text" class="form-control " name="negara"
                                                placeholder="Masukan Negara">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div><br>
                        <div class=" card-footer ">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="button" onclick="history.back()"
                                class="btn btn-default float-right">Cancel</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js "></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js "></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js "></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js "></script>

    <script>
    function myFunction() {
        var x = document.getElementById("moa2");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>

    <script>
    $(document).ready(function() {
        $('#pic').on('change', function() {
            var picID = $(this).val();
            if (picID) {
                $.ajax({
                    url: '/getData/' + picID,
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            document.getElementById('notelppic').value = data
                                .notelpakunuser;
                            document.getElementById('emailpic').value = data.emailakunuser;
                        }
                    }
                });
            }
        });
    });

    function yesnoCheck1(that) {
        if (that.value == "2") {
            document.getElementById("check1").style.display = "block";
        } else {
            document.getElementById("check1").style.display = "none";
        }
    }

    function yesnoCheck2(that) {
        if (that.value == "2") {
            document.getElementById("check2").style.display = "block";
        } else {
            document.getElementById("check2").style.display = "none";
        }
    }
    </script>

</body>

</html>