<?php
if (session()->missing('id')) {
    header('Location: /Login');
    die;
} elseif (session('role') != 'Admin') {
    header('Location: /UserRekap');
    die;
}
?>

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
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" style="padding-top: 29%;">
                    <img src="https://cdn-icons-png.flaticon.com/128/3119/3119338.png" data-src="https://cdn-icons-png.flaticon.com/128/3119/3119338.png" alt="Notification " title="Notification " width="25" height="25" class="lzy lazyload--done" srcset="https://cdn-icons-png.flaticon.com/128/3119/3119338.png 4x">
                    <!-- <i class="far fa-bell fa-2x"> </i> -->
                    <!-- https://www.flaticon.com/free-icon/notification_3119338 -->
                    <span class=" badge badge-warning navbar-badge">{{ count(session('mou')) }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">{{ count(session('mou')) }} Notifications</span>
                    @foreach(session('mou') as $d)
                    <div class="dropdown-divider"></div>
                    <a href="{{route('edit_kerjasama', $d->tambah_kerjasama_id)}}" class="dropdown-item">
                        <img class="nav-icon" srcset="https://img.icons8.com/material-outlined/344/error--v1.png 17x"></img>
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
                    <img src=" {{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image" style="padding-top: 28%">
                </div>
                <div class="info" style="padding-top: 7%">
                    <a href="/Akun" class="d-block" style="padding-top:5%">@if(session()->has('id'))
                        {{session('name')}} @else
                        ???
                        @endif</a>
                </div>
                <div class=" info">
                    <a href="/Logout" class="nav-link">
                        <img class="nav-icon" style="opacity: 55%; width: 18px;" srcset="https://cdn-icons-png.flaticon.com/512/1286/1286853.png 2x" width="1rem" height="1rem" alt="exit icon" loading="lazy">
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
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Kerja Sama</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/Kerjasama">Kerja Sama</a></li>
                            <li class="breadcrumb-item active">Edit Kerja Sama</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.container-fluid -->
        <section class="content">
            <form class="form-horizontal" action="{{route('update_kerjasama', $tks->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <!-- form start -->
                    <div class="card-body">
                        <h3 style="text-align: center;">Kerja Sama</h3>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="select" class="col-sm-2 col-form-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option hidden selected>{{ $tks->status }}</option>
                                        <option>Aktif</option>
                                        <option>Tidak Aktif</option>
                                        <option>Kedaluwarsa</option>
                                        <option>Dalam Penjajakan</option>
                                        <option>Perpanjangan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="select" class="col-sm-2 col-form-label">Nama Mitra</label>
                                    <div class="col-sm-13">
                                        <select class="form-control" name="namamitra" id="namamitra">
                                            @foreach ($nm as $nm)
                                            <option <?php if ($nm->nama == $tks->namamitra) {
                                                        echo ('selected');
                                                    } ?>>{{ $nm->nama }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="select" class="col-sm-2 col-form-label">Jenis Mitra</label>
                                    <select class="form-control" name="jenismitra">
                                        <option hidden selected>{{ $tks->jenismitra }}</option>
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
                                        <input type="month" class="form-control " name="bulaninput" value="{{ $tks->bulaninput }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div><br>
                </div>

                <div class="more-item">
                    @foreach ($mou as $mou)
                    <div class="row">
                        <div class="col-md-12 align-items-stretch">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div> -->
                                <!-- form start -->
                                <div class="card-body">
                                    <h3 style="text-align: center;">Memorandum of Understanding (MoU)</h3>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="judul_mou" class="col-sm-4 col-form-label">Judul Kerja
                                                Sama</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control @error('judul_mou') is-invalid @enderror" name="judul_mou[]" placeholder="Masukan Judul Kerja Sama" value=@if ($mou !=null) "{{ $mou->Judul }}" @endif>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-6">
                                            <label for="tglmulai_mou" class="col-sm-4 col-form-label">Tanggal
                                                Mulai</label>
                                            <div class="col-sm-12">
                                                <input type="date" class="form-control @error('tglmulai_mou') is-invalid @enderror" name="tglmulai_mou[]" value=@if ($mou !=null) @if ($mou->tglmulai != null)
                                                '{{ $mou->tglmulai->format('Y-m-d') }}'
                                                @endif @endif>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-6">
                                            <label for="path_mou" class="col-sm-4 col-form-label ">Dokumen
                                                MoU</label>
                                            <div class="col-sm-12">
                                                <input type="file" class="form-control " name="path_mou[]" accept="pdf/*" multiple>
                                                @if($mou!=null)
                                                <br>
                                                <a href="{{route('preview', $mou->path)}}" target="_blank" style="text-decoration:underline;">Preview Dokumen</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="tglselesai_mou" class=" col-sm-4 col-form-label ">Tanggal
                                                Selesai</label>
                                            <!-- <div class=" col-sm-12">
                                                <select class="form-control" onchange="yesnoCheck1(this)">
                                                    <option value="1">Tidak Terbatas</option>
                                                    <option value="2" @if ($mou !=null) @if($mou->tglselesai != null) selected @endif @endif>Terbatas</option>
                                                </select>
                                            </div> -->
                                            <br>
                                            <div class=" col-sm-12">
                                                <input id="check1" type="date" class="form-control @error('tglselesai_mou') is-invalid @enderror" name="tglselesai_mou[]" value=@if($mou->tglselesai != null)
                                                '{{ $mou->tglselesai->format('Y-m-d') }}'
                                                @endif>
                                                <!-- @if($mou==null || $mou->tglselesai == null)
                                                    style="display:none;"
                                                    @endif
                                                    value= @if ($mou != null) @if($mou->tglselesai != null)
                                                    '{{ $mou->tglselesai->format('Y-m-d') }}'
                                                    @endif @endif> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 align-items-stretch">
                        <div class="card card-info">
                            <div class=" card-footer">
                                <button type="button" class="btn btn-info float-right add-more">Tambah
                                    MOU</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="more-item1">
                    @foreach ($moa as $moa)
                    <div class="row">
                        <div class="col-md-12 align-items-stretch">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div> -->
                                <!-- form start -->
                                <div class="card-body">
                                    <h3 style="text-align: center;">Memorandum of Aggreement (MoA)</h3>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="judul_moa[]" class="col-sm-4 col-form-label">Judul
                                                Kerja Sama</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control @error('judul_moa') is-invalid @enderror" name="judul_moa[]" placeholder="Masukan Judul Kerja Sama" \ value=@if($moa!=null) "{{ $moa->judul }}" @endif>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-6">
                                            <label for="nilaikontrak" class="col-sm-4 col-form-label">Nilai
                                                Kontrak</label>
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control @error('nilaikontrak') is-invalid @enderror" name="nilaikontrak[]" placeholder="Masukan Nilai Kontrak (Rp)" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==15) return false;" value=@if($moa!=null) "{{ $moa->nilaikontrak }}" @endif>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-6">
                                            <label for="select " class="col-sm-4 col-form-label ">Lingkup Kerja Sama</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="lingkupkerja[]">
                                                    @if($moa!=null && $moa->lingkupkerja != null)
                                                    <option hidden>{{ $moa->lingkupkerja }}</option>
                                                    @else
                                                    <option value="" hidden>--- Pilih Lingkup Kerja ---</option>
                                                    @endif
                                                    @foreach ($lk as $item)
                                                    <option>{{ $item->judullingkupkerja }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-6">
                                            <label for="tglmulai_moa" class="col-sm-4 col-form-label">Tanggal
                                                Mulai</label>
                                            <div class="col-sm-12">
                                                <input type="date" class="form-control @error('tglmulai_moa') is-invalid @enderror" name="tglmulai_moa[]" value=@if($moa!=null) @if( $moa->tglmulai != null)
                                                '{{ $moa->tglmulai->format('Y-m-d') }}'
                                                @endif @endif>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-6">
                                            <label for="path_moa" class="col-sm-4 col-form-label ">Dokumen
                                                MoA</label>
                                            <div class="col-sm-12">
                                                <input type="file" class="form-control" name="path_moa[]" accept="pdf/*" multiple>
                                                @if($moa!=null)
                                                <br>
                                                <a href="{{route('preview', $moa->path)}}" target="_blank" style="text-decoration:underline;">Preview Dokumen</a>
                                                @endif
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-6">
                                            <label for="tglselesai_moa" class=" col-sm-4 col-form-label ">Tanggal
                                                Selesai</label>
                                            <!-- <div class=" col-sm-12">
                                                <select class="form-control" onchange="yesnoCheck2(this)">
                                                    <option value="1">Tidak Terbatas</option>
                                                    <option value="2" @if($moa!=null) @if($moa->tglselesai != null) selected @endif @endif>Terbatas</option>
                                                </select>
                                            </div> -->
                                            <label class=" col-sm-4 col-form-label "></label>
                                            <div class=" col-sm-12">
                                                <input id="check2" type="date" class="form-control @error('tglselesai_moa') is-invalid @enderror" name="tglselesai_moa[]" value=@if($moa->tglselesai != null)
                                                '{{ $moa->tglselesai->format('Y-m-d') }}'
                                                @endif>
                                                <!-- @if($moa==null || $moa->tglselesai == null)
                                                    style="display:none;"
                                                    @endif
                                                    value= @if($moa!=null) @if($moa->tglselesai != null)
                                                    '{{ $moa->tglselesai->format('Y-m-d') }}'
                                                    @endif @endif> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 align-items-stretch">
                        <div class="card card-info">
                            <div class=" card-footer">
                                <button type="button" class="btn btn-info float-right add-more1">Tambah
                                    MOA</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card card-info">
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Narahubung</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="narahubung" placeholder="Masukkan Narahubung" value="{{ $tks->narahubung }}">
                                    </div>
                                    <br><br>
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control " name="notelpnara" placeholder="No. Telepon" value="{{ $tks->notelpnara }}" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==15) return false;">
                                    </div>
                                    <br><br>
                                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Email</label>
                                    <div class="col-sm-10 ">
                                        <input type="text" class="form-control" name="emailnara" placeholder="Alamat Email" value="{{ $tks->emailnara }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card card-info">
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Assign User</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="pic" id="pic">
                                                @if ($tks->assignuserakun == null)
                                                <option hidden selected>{{ $tks->assignuserakun }}</option>
                                                @endif

                                                @foreach($users as $u)
                                                <option value="{{ $u->id }}" <?php if ($tks->assignuserakun == $u->id) {
                                                                                    echo ('selected');
                                                                                } ?>>{{ $u->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <br><br>
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='notelppic' id="notelppic" placeholder="No Telepon PIC" value="{{ $tks->notelppic }}" readonly>
                                    </div>
                                    <br><br>
                                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Email</label>
                                    <div class="col-sm-10 ">
                                        <input type="text" class="form-control" name="emailpic" id="emailpic" placeholder="Email PIC" value="{{ $tks->emailpic}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
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

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }} "></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }} "></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }} "></script>

    <script>
        $(document).ready(function() {
            $(".add-more").click(function() {
                $(".more-item").append(
                    "<div class=\"row\"> <div class=\"col-md-12 align-items-stretch\"> <div class=\"card\"> <div class=\"card-header\"> <div class=\"card-tools\"> <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"> <i class=\"fas fa-minus\"></i> </button> <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"> <i class=\"fas fa-times\"></i> </button> </div> </div> <!-- form start --> <div class=\"card-body\"> <div class=\"row\"> <div class=\"col-md-6\"></div> </div> <h3 style=\"text-align: center;\">Memorandum of Understanding (MoU)</h3> <div class=\"form-group row\"> <div class=\"col-md-6\"> <label for=\"judul_mou\" class=\"col-sm-4 col-form-label\">Judul Kerja Sama</label> <div class=\"col-sm-12\"> <input type=\"text\" class=\"form-control @error('judul_mou') is-invalid @enderror\" name=\"judul_mou[]\" placeholder=\"Masukan Judul Kerja Sama\"> </div> </div> <br><br> <div class=\"col-md-6\"> <label for=\"tglmulai_mou\" class=\"col-sm-4 col-form-label\">Tanggal Mulai</label> <div class=\"col-sm-12\"> <input type=\"date\" class=\"form-control @error('tglmulai_mou') is-invalid @enderror\" name=\"tglmulai_mou[]\"> </div> </div> <br><br> <div class=\"col-md-6\"> <label for=\"path_mou\" class=\"col-sm-4 col-form-label \">Dokumen MoU</label> <div class=\"col-sm-12\"> <input type=\"file\" class=\"form-control \" name=\"path_mou[]\" accept=\"pdf/*\" multiple> </div><br> </div> <div class=\"col-md-6\"> <label for=\"tglselesai_mou\" class=\" col-sm-4 col-form-label \">Tanggal Selesai</label> <br> <div class=\" col-sm-12\"> <input id=\"check1\" type=\"date\" class=\"form-control @error('tglselesai_mou') is-invalid @enderror\" name=\"tglselesai_mou[]\" > </div> </div> </div> </div>  </div> </div> </div>"
                );
            });
            // style=\"display:none;\"
            // <div class=\" col-sm-12\"> <select class=\"form-control\" onchange=\"yesnoCheck1(this)\"> <option value=\"1\">Tidak Terbatas</option> <option value=\"2\">Terbatas</option> </select> </div>

            $(".add-more1").click(function() {
                $(".more-item1").append(
                    "<div class=\"row\"> <div class=\"col-md-12 align-items-stretch\"> <div class=\"card\"> <div class=\"card-header\"> <div class=\"card-tools\"> <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"> <i class=\"fas fa-minus\"></i> </button> <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"> <i class=\"fas fa-times\"></i> </button> </div> </div> <!-- form start --> <div class=\"card-body\"> <h3 style=\"text-align: center;\">Memorandum of Aggreement (MoA)</h3> <div class=\"form-group row\"> <div class=\"col-md-6\"> <label for=\"judul_moa[]\" class=\"col-sm-4 col-form-label\">Judul Kerja Sama</label> <div class=\"col-sm-12\"> <input type=\"text\" class=\"form-control @error('judul_moa') is-invalid @enderror\" name=\"judul_moa[]\" placeholder=\"Masukan Judul Kerja Sama\"> </div> </div> <br><br> <div class=\"col-md-6\"> <label for=\"nilaikontrak\" class=\"col-sm-4 col-form-label\">Nilai Kontrak</label> <div class=\"col-sm-12\"> <input type=\"number\" class=\"form-control @error('nilaikontrak') is-invalid @enderror\" name=\"nilaikontrak[]\" placeholder=\"Masukan Nilai Kontrak (Rp)\" pattern=\"/^-?\d+\.?\d*$/\" onKeyPress=\"if(this.value.length==15) return false;\"> </div> </div> <br><br> <div class=\"col-md-6\"> <label for=\"select \" class=\"col-sm-4 col-form-label \">Lingkup Kerja Sama</label> <div class=\"col-sm-12\"> <select class=\"form-control\" name=\"lingkupkerja[]\"> <option value=\"\" hidden>--- Pilih Lingkup Kerja ---</option> @foreach ($lk as $item) <option>{{ $item->judullingkupkerja }}</option> @endforeach </select> </div> </div> <br><br> <div class=\"col-md-6\"> <label for=\"tglmulai_moa\" class=\"col-sm-4 col-form-label\">Tanggal Mulai</label> <div class=\"col-sm-12\"> <input type=\"date\" class=\"form-control @error('tglmulai_moa') is-invalid @enderror\" name=\"tglmulai_moa[]\"> </div> </div> <br><br> <div class=\"col-md-6\"> <label for=\"path_moa\" class=\"col-sm-4 col-form-label \">Dokumen MoA</label> <div class=\"col-sm-12\"> <input type=\"file\" class=\"form-control\" name=\"path_moa[]\" accept=\"pdf/*\" multiple> </div> </div> <br><br> <div class=\"col-md-6\"> <label for=\"tglselesai_moa\" class=\" col-sm-4 col-form-label \">Tanggal Selesai</label> <label class=\" col-sm-4 col-form-label \"></label> <div class=\" col-sm-12\"> <input id=\"check2\" type=\"date\" class=\"form-control @error('tglselesai_moa') is-invalid @enderror\" name=\"tglselesai_moa[]\" > </div> </div> </div> </div>  </div> </div> </div>"
                );
            });
            // style=\"display:none;\"
            // <div class=\" col-sm-12\"> <select class=\"form-control\" onchange=\"yesnoCheck2(this)\"> <option value=\"1\">Tidak Terbatas</option> <option value=\"2\">Terbatas</option> </select> </div>
        });
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
                                document.getElementById('notelppic').value = data.notelp;
                                document.getElementById('emailpic').value = data.email;
                            }
                        }
                    });
                }
            });
        });

        // function yesnoCheck1(that) {
        //     if (that.value == "2") {
        //         document.getElementById("check1").style.display = "block";
        //     } else {
        //         document.getElementById("check1").style.display = "none";
        //     }
        // }

        // function yesnoCheck2(that) {
        //     if (that.value == "2") {
        //         document.getElementById("check2").style.display = "block";
        //     } else {
        //         document.getElementById("check2").style.display = "none";
        //     }
        // }
    </script>

</body>

</html>