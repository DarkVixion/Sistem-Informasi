@extends('AdminTemplate')
@section('isiAdmin')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akun - Universitas Pertamina</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
</head>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Akun</h1>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-3">
                            <div class="d-flex justify-content-center"">
                                <img class=" profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt=" User profile picture">
                            </div>
                            <h3 class="profile-username text-center">Admin UPer</h3>
                            <p class="text-muted text-center">Universitas Pertamina</p><br><br>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Nama" placeholder="Admin UPer">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Nama" placeholder="122333">
                                </div>
                            </div></br>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">E-Mail</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Nama" placeholder="admin.uper@dududu.ac.id">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Nama" placeholder="Jl. Teuku Nyak Ariefr">
                                </div>
                            </div><br>
                            <div>
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <button type="submit" class="btn btn-default float-right">Buang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </section>
@endsection