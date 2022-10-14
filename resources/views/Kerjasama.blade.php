@extends('AdminTemplate')
@section('isiAdmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekap Kontrak - Universitas Pertamina</title>

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

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Rekap Kontrak</h1>
            </div>
            <div class="col-sm-6">

                <a href="TambahKerja">
                    <button type="button" class="btn btn-default float-right"
                        style="background-color:lightblue; border-radius:15px;">
                        Tambah Kerja Sama
                    </button>
                </a>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-xl"
                    style="border-radius:15px;"><i class="fas fa-plus"></i> Import
                    Excel</button>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="md-card-content" style="overflow-x: auto;">
                            <table id="example1" class="table table-bordered table-striped" style="width:max-content;">
                                <thead>
                                    <tr>
                                        <th>Bulan Pencatatan</th>
                                        <th>Nama</th>
                                        <th>Jenis Mitra</th>
                                        <th>Lingkup Kerja Sama</th>
                                        <th>Nilai Kontrak</th>
                                        <th>Periode Mulai MoU</th>
                                        <th>Periode Berakhir MoU</th>
                                        <th>Periode Mulai MoA</th>
                                        <th>Periode Berakhir MoA</th>
                                        <th>Misc.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kerjasama as $item)
                                    <tr>
                                        <td>{{ $item->bulaninput }}</td>
                                        <td>{{ $item->namamitra }}</td>
                                        <td>{{ $item->jenismitra }}</td>
                                        <td>{{ $item->lingkupkerja }}</td>
                                        <td>
                                            @if ( $item->nilaikontrak != null)
                                            Rp {{ number_format($item->nilaikontrak) }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ( $item->tglmulai_mou != null)
                                            {{ $item->tglmulai_mou->format('Y-m-d') }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ( $item->tglselesai_mou != null)
                                            {{ $item->tglselesai_mou->format('Y-m-d') }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ( $item->tglmulai_moa != null)
                                            {{ $item->tglmulai_moa->format('Y-m-d') }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ( $item->tglselesai_moa != null)
                                            {{ $item->tglselesai_moa->format('Y-m-d') }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('edit_kerjasama', $item->id)}}"><button
                                                    class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                            <form action="{{route('hapus_kerjasama', $item->id)}}" method="POST"
                                                style="display:inline ">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- modal untuk tambah jenis -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Dengan Excel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('tambah_mitra')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="modal-body">
                        <div class="form-group row ">
                            <label for="path_excel" class="col-sm-2 col-form-label">Import Excel</label>
                            <div class="col-sm-10 ">
                                <input type="file" class="form-control " name="path_excel" accept="pdf/*" multiple>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info float-right">Tambah file.xls</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
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

@endsection