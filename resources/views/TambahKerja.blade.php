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
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">2</span>
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
                    <div class="image">
                        <img src="{{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
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
                                <li class="nav-item">
                                    <a href="JenisMitra" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jenis Mitra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="LingkupKerja" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lingkup Kerja Sama</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="Kerjasama" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Kerja Sama</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Mitra" class="nav-link">
                                <img class="nav-icon" style="opacity: 75%"
                                    srcset="https://img.icons8.com/offices/2x/building.png 2.5x" alt="Building icon"
                                    loading="lazy"></img>
                                <p>Mitra</p>
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
        <div class="content-wrapper" style="min-height: 1755;">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid" style="padding-top: 1.5%">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tambah Kerja Sama</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="Kerjasama">Kerja Sama</a></li>
                                <li class="breadcrumb-item active">Tambah Kerja Sama</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.container-fluid -->
            <section class="content">
                <form class="form-horizontal" action="{{route('tambah_kerjasama')}}" method="POST"
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
                                    <input type="text" class="form-control " name="alamat" placeholder="Masukan Alamat">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Website</label>
                                        <input type="url" class="form-control " name="website"
                                            placeholder="Masukan Website">
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                    </div>
                    <!-- /.card -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-info">
                                <!-- form start -->
                                <div class="card-body">
                                    <h3 style="text-align: center;">Memorandum of Understanding (MoU)</h3>
                                    <div class="form-group row">
                                        <label for="input" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-10">
                                        </div>
                                        <br>
                                        <label for="judul_mou" class="col-sm-2 col-form-label">Judul Kerja Sama</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('judul_mou') is-invalid @enderror"
                                                name="judul_mou" placeholder="Masukan Judul Kerja Sama">
                                        </div>
                                        <br><br>
                                        <label for="tglmulai_mou" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="date"
                                                class="form-control @error('tglmulai_mou') is-invalid @enderror"
                                                name="tglmulai_mou">
                                        </div>
                                        <br><br>
                                        <label for="tglselesai_mou" class=" col-sm-2 col-form-label ">Tanggal
                                            Selesai</label>
                                        <div class=" col-sm-10 ">
                                            <input type="date"
                                                class="form-control @error('tglselesai_mou') is-invalid @enderror"
                                                name="tglselesai_mou">
                                        </div>
                                        <br><br>
                                        <label for="path_mou" class="col-sm-2 col-form-label ">Dokumen MoU</label>
                                        <div class="col-sm-10 ">
                                            <input type="file" class="form-control " name="path_mou[]" accept="pdf/*"
                                                multiple>
                                        </div><br><br>
                                        <div class="col-sm-10" style="opacity: 0.0;">
                                            <label for="tglmulai_moa" class="col-sm-2 col-form-label">Tanggal
                                                Mulai</label>

                                            <br>
                                            <label g for="tglselesai_moa" class=" col-sm-2 col-form-label ">Tanggal
                                                Selesai</label>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-info">
                                <!-- form start -->
                                <div class="card-body">
                                    <h3 style="text-align: center;">Memorandum of Aggreement (MoA)</h3>
                                    <div class="form-group row">
                                        <label for="input" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-10">
                                        </div>
                                        <br>
                                        <label for="judul_moa" class="col-sm-2 col-form-label">Judul
                                            Kerjasama</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('judul_moa') is-invalid @enderror"
                                                name="judul_moa" placeholder="Masukan Judul Kerja Sama">
                                        </div>
                                        <br>
                                        <label for="nilaikontrak" class="col-sm-2 col-form-label">Nilai
                                            Kontrak</label>
                                        <div class="col-sm-10">
                                            <input type="number"
                                                class="form-control @error('nilaikontrak') is-invalid @enderror"
                                                name="nilaikontrak" placeholder="Masukan Nilai Kontrak (Rp)">
                                        </div>
                                        <br>
                                        <label for="select " class="col-sm-2 col-form-label ">Lingkup Kerja
                                            Sama</label>
                                        <div class="col-sm-10 ">
                                            <select class="form-control" name="lingkupkerja">
                                                <option value="" hidden>--- Pilih Lingkup Kerja ---</option>
                                                @foreach ($lk as $item)
                                                <option>{{ $item->judullingkupkerja }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <label for="tglmulai_moa" class="col-sm-2 col-form-label">Tanggal
                                            Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="date"
                                                class="form-control @error('tglmulai_moa') is-invalid @enderror"
                                                name="tglmulai_moa">
                                        </div>
                                        <br>
                                        <label for="tglselesai_moa" class=" col-sm-2 col-form-label ">Tanggal
                                            Selesai</label>
                                        <div class=" col-sm-10 ">
                                            <input type="date"
                                                class="form-control @error('tglselesai_moa') is-invalid @enderror"
                                                name="tglselesai_moa">
                                        </div>
                                        <br>
                                        <label for="path_moa" class="col-sm-2 col-form-label ">Dokumen MoA</label>
                                        <div class="col-sm-10 ">
                                            <input type="file" class="form-control" name="path_moa[]" accept="pdf/*"
                                                multiple>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <!-- Horizontal Form -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-info">
                                <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="input" class="col-sm-2 col-form-label">Narahubung</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="narahubung"
                                                placeholder="Masukkan Narahubung">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor
                                            Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control " name="notelpnara"
                                                placeholder="No. Telepon" pattern="/^-?\d+\.?\d*$/"
                                                onKeyPress="if(this.value.length==15) return false;">
                                        </div>
                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Email</label>
                                        <div class="col-sm-10 ">
                                            <input type="text" class="form-control" name="emailnara"
                                                placeholder="Alamat Email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-info">
                                <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="select" class="col-sm-2 col-form-label">Assign User</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <select class="form-control" name="pic">
                                                    <option value="" hidden> Pilih Nama PIC User </option>
                                                    @foreach($users as $u)
                                                    <option value="{{$u->id}}"> {{ $u->namaakunuser }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor
                                            Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="notelppic" id="notelppic"
                                                placeholder="No Telepon PIC" value="" disabled>
                                        </div>
                                        <br><br>
                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Email</label>
                                        <div class="col-sm-10 ">
                                            <input type="text" class="form-control" name="emailpic" id="emailpic"
                                                placeholder="Email PIC" value="" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" card card-info">
                        <div class=" card-footer ">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="button" onclick="history.back()" class="btn btn-default float-right">Cancel</button>
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

</body>

</html>