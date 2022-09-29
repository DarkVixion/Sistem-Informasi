<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Kerja Sama | Universitas Pertamina</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
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
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">2 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="/InformasiMitra" class="dropdown-item">
                        <img class="nav-icon" srcset="https://img.icons8.com/material-outlined/344/error--v1.png 17x"></img> Hampir Kedaluwarsa - nama MOU
                        <span class="float-right text-muted text-sm">D-5</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="/InformasiMitra" class="dropdown-item">
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
                    <img src="{{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="/Akun" class="d-block">Admin UPer</a>
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
                    <img src="{{ asset('dist/img/Head Logo.png') }}" alt="User Image" style="width:100%;">
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
                            <p>Kerja Sama</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Mitra" class="nav-link">
                            <img class="nav-icon" style="opacity: 75%" srcset="https://img.icons8.com/offices/2x/building.png 2.5x" alt="Building icon" loading="lazy"></img>
                            <p>Mitra</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Akun" class="nav-link">
                            <img class="nav-icon" style="opacity: 55%" srcset="https://cdn-icons-png.flaticon.com/128/848/848006.png 2.5x" alt="Building icon" loading="lazy"></img>
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
            <form class="form-horizontal" action="{{route('update_kerjasama', $tks->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Kerja Sama</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="Kerjasama">Kerja Sama</a></li>
                                <li class="breadcrumb-item active">Edit Kerja Sama</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <!-- Horizontal Form -->
                <div class="card card-info">

                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="select" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="status">
                                        <option>Aktif</option>
                                        <option>Tidak Aktif</option>
                                        <option>Kadarluwasa</option>
                                        <option>Dalam Penjajakan</option>
                                        <option>Perpanjangan</option>
                                        <option hidden selected>{{ $tks->status }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama Mitra</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="namamitra" placeholder="Masukan Nama Mitra" value="{{ $tks->namamitra }}">
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label for="select" class="col-sm-2 col-form-label">Jenis Mitra</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="jenismitra">
                                        @foreach ($jm as $item)
                                            <option>{{ $item->juduljenismitra }}</option>
                                        @endforeach
                                        <option hidden selected>{{ $tks->jenismitra }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Judul Kerja Sama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control " name="judulkerjasama" placeholder="Masukan Judul Kerja Sama" value="{{ $tks->judulkerjasama }}">
                            </div>
                        </div>.
                        <div class="form-group row ">
                            <label for="select " class="col-sm-2 col-form-label ">Lingkup Kerja Sama</label>
                            <div class="col-sm-10 ">
                                <div class="form-group ">
                                    <select class="form-control" name="lingkupkerja">
                                        @foreach ($lk as $item)
                                            <option>{{ $item->judullingkupkerja }}</option>
                                        @endforeach
                                        <option hidden selected>{{ $tks->lingkupkerja }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Alamat</label>
                            <div class="col-sm-10 ">
                                <input type="text" class="form-control " name="alamat" placeholder="Masukan Alamat" value="{{ $tks->alamat }}">
                            </div>
                            <br><br><br>
                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Negara</label>
                            <div class="col-sm-10 ">
                                <input type="text" class="form-control " name="negara" placeholder="Masukan Negara" value="{{ $tks->negara }}">
                            </div><br><br><br>
                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone</label>
                            <div class="col-sm-10 ">
                                <input type="number" class="form-control " name="notelpmitra" placeholder="Masukan Nomor Telephone" value="{{ $tks->notelpmitra }}">
                            </div><br><br><br>
                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Website</label>
                            <div class="col-sm-10 ">
                                <input type="url" class="form-control " name="website" placeholder="Masukan Website" value="{{ $tks->website }}">
                            </div><br><br><br>
                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Bulan Kerja Sama</label>
                            <div class="col-sm-10 ">
                                <input type="month" class="form-control " name="bulaninput" value="{{ $tks->bulaninput }}">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Horizontal Form -->
                <div class="card card-info">

                    <!-- form start -->

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <h3 style="text-align: center;">Memorandum of Understanding (MoU)</h3>
                            </div>
                            <br><br><br>
                            <label for="judul_mou" class="col-sm-2 col-form-label">Judul Kerja Sama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('judul_mou') is-invalid @enderror" name="judul_mou" placeholder="Masukan Judul Kerja Sama" value="{{ $tks->judul_mou }}">
                            </div>
                            <br><br><br>
                            <label for="tglmulai_mou" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control @error('tglmulai_mou') is-invalid @enderror" name="tglmulai_mou" value="{{ $tks->tglmulai_mou->format('Y-m-d') }}">
                            </div>
                            <br><br><br>
                            <label for="tglselesai_mou" class=" col-sm-2 col-form-label ">Tanggal Selesai</label>
                            <div class=" col-sm-10 ">
                                <input type="date" class="form-control @error('tglselesai_mou') is-invalid @enderror" name="tglselesai_mou" value="{{ $tks->tglselesai_mou->format('Y-m-d') }}">
                            </div>
                            <br><br><br>
                            <label for="path_mou" class="col-sm-2 col-form-label ">Dokumen MoU</label>
                            <div class="col-sm-10 ">
                                <input type="file" class="form-control " name="path_mou[]" accept="pdf/*" multiple>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->


                </div>


                <!-- Horizontal Form -->
                <div class="card card-info">

                    <!-- form start -->
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <h3 style="text-align: center;">Memorandum of Aggreement (MoA)</h3>
                            </div>
                            <br><br><br>
                            <label for="judul_moa" class="col-sm-2 col-form-label">Judul Kerjasama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('judul_moa') is-invalid @enderror" name="judul_moa" placeholder="Masukan Judul Kerja Sama" value="{{ $tks->judul_moa }}">
                            </div>
                            <br><br><br>
                            <label for="nilaikontrak" class="col-sm-2 col-form-label">Nilai Kontrak</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nilaikontrak') is-invalid @enderror" name="nilaikontrak" placeholder="Masukan Nilai Kontrak (Rp)" value="{{ $tks->nilaikontrak }}">
                            </div>
                            <br><br><br>
                            <label for="tglmulai_moa" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control @error('tglmulai_moa') is-invalid @enderror" name="tglmulai_moa" 
                                    value="@if ( $item->tglmulai_moa  != null)
                                            {{ $item->tglmulai_moa->format('Y-m-d') }}
                                            @else
                                            {{ $item->tglmulai_moa}}
                                            @endif ">
                            </div>
                            <br><br><br>
                            <label for="tglselesai_moa" class=" col-sm-2 col-form-label ">Tanggal Selesai</label>
                            <div class=" col-sm-10 ">
                                <input type="date" class="form-control @error('tglselesai_moa') is-invalid @enderror" name="tglselesai_moa" 
                                    value="@if ( $item->tglselesai_moa  != null)
                                            {{ $item->tglselesai_moa->format('Y-m-d') }}
                                            @else
                                            {{ $item->tglselesai_moa }}
                                            @endif ">
                            </div>
                            <br><br><br>
                            <label for="path_moa" class="col-sm-2 col-form-label ">Dokumen MoA</label>
                            <div class="col-sm-10 ">
                                <input type="file" class="form-control" name="path_moa[]" accept="pdf/*" multiple>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card card-info">

                    <!-- form start -->
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Narahubung</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="narahubung" placeholder="Masukkan Narahubung" value="{{ $tks->narahubung }}">
                            </div>
                            <br><br><br>
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control " name="notelpnara" placeholder="No. Telepon" value="{{ $tks->notelpnara }}">
                            </div>
                            <br><br><br>
                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Email</label>
                            <div class="col-sm-10 ">
                                <input type="text" class="form-control" name="emailnara" placeholder="Alamat Email" value="{{ $tks->emailnara }}">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card card-info">

                    <!-- form start -->
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">PIC UPer</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="pic">
                                        <option hidden>Pilih Nama PIC UPer</option>
                                        <option>Bapak Abcd</option>
                                        <option>Ibu Efgh</option>
                                    </select>

                                </div>
                            </div>
                            <br><br><br>
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name='notelppic' id="notelppic" placeholder="notelppic" value="" disabled>
                            </div>
                            <br><br><br>
                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Email</label>
                            <div class="col-sm-10 ">
                                <input type="text" class="form-control" name="emailpic" id="emailpic" placeholder="emailpic" value="" disabled>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class=" card-footer ">
                        <button type="submit" class="btn btn-info">Save</button>
                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                    </div>

                    <!-- /.card-footer -->
                </div>
            </form>
        </section>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }} "></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }} "></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }} "></script>

</body>

</html>