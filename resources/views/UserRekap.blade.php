@extends('UserTemplate')
@section('isiUser')
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
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nama Kerjasama" title="Type in a name">
                        <div class="md-card-content">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="font-size: 12px;">Bulan Pencatatan</th>
                                        <th style="font-size: 12px;">Nama</th>
                                        <th style="font-size: 12px;">Jenis Mitra</th>
                                        <th style="font-size: 12px;">Jenis Kerjasama</th>
                                        <th style="font-size: 12px;">Judul</th>
                                        <th style="font-size: 12px;">Periode Mulai Kerjasama</th>
                                        <th style="font-size: 12px;">Periode Berakhir Kerjasama</th>
                                        <th style="width:10%; font-size: 12px;">Misc.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kerjasama as $item)
                                    <?php
                                        // $moa = App\Models\MoA::where('tambah_kerjasama_id', $item->id)->first();
                                        // $mou = App\Models\MoU::where('tambah_kerjasama_id', $item->id)->first();
                                    
                                        $moa = App\Models\MoA::where('tambah_kerjasama_id', $item->id)->get();
                                        $mou = App\Models\MoU::where('tambah_kerjasama_id', $item->id)->get();
                                        $mou_i = count($mou);
                                        $moa_i = count($moa);
                                        $max_i = $mou_i + $moa_i;
                                    ?>

                                    @if ($mou_i != 0)
                                    <tr>
                                        <td rowspan="{{$max_i}}" style="font-size: 12px;">{{ $item->bulaninput }}</td>
                                        <td rowspan="{{$max_i}}" style="font-size: 12px;">{{ $item->namamitra }}</td>
                                        <td rowspan="{{$max_i}}" style="font-size: 12px;">{{ $item->jenismitra }}</td>
                                        <td style="font-size: 12px;">MoU</td>
                                        <td style="font-size: 12px;">{{ $mou[0]->Judul }}</td>
                                        <td style="text-align:center; font-size: 12px;">
                                            @if ( $mou[0]->tglmulai != null)
                                            {{ $mou[0]->tglmulai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                        <td style="text-align:center; font-size: 12px;">
                                            @if ( $mou[0]->tglselesai != null)
                                            {{ $mou[0]->tglselesai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                        <td rowspan="{{$max_i}}" style="vertical-align:middle;">
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

                                        @for($i=1; $i<$mou_i; $i++) 
                                        <tr>
                                            <td style="font-size: 12px;">MoU</td>
                                            <td style="font-size: 12px;">{{ $mou[0]->Judul }}</td>
                                            <td style="text-align:center; font-size:12px;">
                                                @if ( $mou[$i]->tglmulai != null)
                                                {{ $mou[0]->tglmulai->format('d-m-Y') }}
                                                @endif
                                            </td>
                                            <td style="text-align:center; font-size:12px;">
                                                @if ( $mou[$i]->tglselesai != null)
                                                {{ $mou[0]->tglselesai->format('d-m-Y') }}
                                                @endif
                                            </td>
                                        </tr>
                                        @endfor

                                        @if ($moa_i != 0)
                                        @for($i=0; $i<$moa_i; $i++) 
                                        <tr>
                                            <td style="font-size: 12px;">MoA</td>
                                            <td style="font-size: 12px;">{{ $moa[$i]->Judul }}</td>
                                            <td style="text-align:center; font-size:12px;">
                                                @if ( $moa[$i]->tglmulai != null)
                                                {{ $moa[0]->tglmulai->format('d-m-Y') }}
                                                @endif
                                            </td>
                                            <td style="text-align:center; font-size:12px;">
                                                @if ( $moa[$i]->tglselesai != null)
                                                {{ $moa[0]->tglselesai->format('d-m-Y') }}
                                                @endif
                                            </td>
                                        </tr>
                                        @endfor
                                        @endif

                                    @elseif ($moa_i != 0)
                                    <tr>
                                        <td rowspan="{{$max_i}}" style="font-size: 12px;">{{ $item->bulaninput }}</td>
                                        <td rowspan="{{$moa_i}}" style="font-size: 12px;">{{ $item->namamitra }}</td>
                                        <td rowspan="{{$max_i}}" style="font-size: 12px;">{{ $item->jenismitra }}</td>
                                        <td style="font-size: 12px;">MoA</td>
                                        <td style="font-size: 12px;">{{ $moa[0]->Judul }}</td>
                                        <td style="text-align:center; font-size:12px">
                                            @if ( $moa[0]->tglmulai != null)
                                            {{ $moa[0]->tglmulai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                        <td style="text-align:center; font-size:12px;">
                                            @if ( $moa[0]->tglselesai != null)
                                            {{ $moa[0]->tglselesai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                        <td rowspan="{{$max_i}}">
                                            <a href="{{route('edit_kerjasama', $item->id)}}"><button
                                                    class="btn btn-primary"><i
                                                        class="fa fa-edit"></i></button></a>
                                            <form action="{{route('hapus_kerjasama', $item->id)}}" method="POST"
                                                style="display:inline ">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>

                                    @for($i=1; $i<$moa_i; $i++) 
                                    <tr>
                                        <td style="font-size: 12px;">MoA</td>
                                        <td style="font-size: 12px;">{{ $moa[0]->Judul }}</td>
                                        <td style="text-align:center; font-size:12px">
                                            @if ( $moa[0]->tglmulai != null)
                                            {{ $moa[0]->tglmulai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                        <td style="text-align:center; font-size:12px;">
                                            @if ( $moa[0]->tglselesai != null)
                                            {{ $moa[0]->tglselesai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                    </tr>
                                    @endfor

                                    @else
                                    <tr>
                                        <td style="font-size: 12px;">{{ $item->bulaninput }}</td>
                                        <td style="font-size: 12px;">{{ $item->namamitra }}</td>
                                        <td style="font-size: 12px;">{{ $item->jenismitra }}</td>
                                        <td style="font-size: 12px;"></td>
                                        <td style="font-size: 12px;"></td>
                                        <td style="font-size: 12px;"></td>
                                        <td style="font-size: 12px;"></td>
                                        <td style="font-size: 12px;">
                                            <a href="{{route('edit_kerjasama', $item->id)}}"><button
                                                    class="btn btn-primary"><i
                                                        class="fa fa-edit"></i></button></a>
                                            <form action="{{route('hapus_kerjasama', $item->id)}}"
                                                method="POST" style="display:inline ">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
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
                <form action="{{route('upload_excel')}}" method="post" enctype="multipart/form-data">
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

@include('jsKerjasama')
@endsection