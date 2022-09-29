@extends('AdminTemplate')
@section('isiAdmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mitra - Universitas Pertamina</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                <h1>Mitra</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Nama Mitra</th>
                                        <th>Jenis Kontrak</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1. </td>
                                            <td>DIKTI</td>  {{--  --}}
                                            <td>MOU</td>
                                            <td> <a href="/AdminViewMitra"> <button class="btn btn-info"><i class="fa fa-eye"></i></button></a></td>  
                                        </tr>
                                        <tr>
                                            <td> 2. </td>
                                            <td>DIKTI</td>  {{--  --}}
                                            <td>MOA</td>
                                            <td> <a href="/AdminViewMitra"> <button class="btn btn-info"><i class="fa fa-eye"></i></button></a></td>  
                                        </tr>
                                        <tr>
                                            <td> 3. </td>
                                            <td>DIKTI</td>  {{--  --}}
                                            <td>MOA</td>
                                            <td> <a href="/AdminViewMitra"> <button class="btn btn-info"><i class="fa fa-eye"></i></button></a></td>  
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.card-body -->
    </section>
                    
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js "></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js "></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js "></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js "></script>    


@endsection
