@extends('AdminTemplate')
@section('isiAdmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mitra - Universitas Pertamina</title>

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
                <h1>Profil Mitra</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Master Data</li>
                    <li class="breadcrumb-item active">Profile Mitra</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
        <div class="card-header">
            <a href="TambahMitra"><button type="button" class="btn btn-default" style="float:right; background-color:lightblue; border-radius:15px;">
                    Tambah Mitra
                </button></a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Nama Mitra</th>
                                        <th>Jenis Mitra</th>
                                        <th>Jenis Kontrak</th>
                                        <th>Judul Kerjasama</th>
                                        <th style="width: 10%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tks as $item)
                                    <?php
                                    $moa = App\Models\MoA::where('tambah_kerjasama_id', $item->id)->get();
                                    $mou = App\Models\MoU::where('tambah_kerjasama_id', $item->id)->get();
                                    $mou_i = count($mou);
                                    $moa_i = count($moa);
                                    $max_i = $mou_i + $moa_i;
                                    ?>

                                    @if ($mou_i != 0)
                                    <tr>
                                        <td rowspan="{{$max_i}}">{{ $loop->iteration }}</td>
                                        <td rowspan="{{$max_i}}">{{ $item->namamitra }}</td>
                                        <td rowspan="{{$max_i}}">{{ $item->jenismitra }}</td>
                                        <td>&nbsp;&ensp;MoU</td>
                                        <td>{{ $mou[0]->Judul }}</td>
                                        <td><button class="btn btn-info" data-toggle="modal" data-target="#modal-xxl{{ $item->id }}"><i class="fa fa-eye"></i></button>
                                            </a></td>
                                    </tr>

                                    @for($i=1; $i<$mou_i; $i++) <tr>
                                        <td>MoU</td>
                                        <td>{{ $mou[$i]->Judul }}</td>
                                        <td><button class="btn btn-info" data-toggle="modal" data-target="#modal-xxl{{ $item->id }}"><i class="fa fa-eye"></i></button></a></td>
                                        </tr>
                                        @endfor

                                        @if ($moa_i != 0)
                                        @for($i=0; $i<$moa_i; $i++) <tr>
                                            <td>MoA</td>
                                            <td>{{ $moa[$i]->judul }}</td>
                                            <td><button class="btn btn-info" data-toggle="modal" data-target="#modal-xxl{{ $item->id }}"><i class="fa fa-eye"></i></button></a></td>
                                            </tr>
                                            @endfor
                                            @endif

                                            @elseif ($moa_i != 0)
                                            <tr>
                                                <td rowspan="{{$moa_i}}">{{ $loop->iteration }}</td>
                                                <td rowspan="{{$moa_i}}">{{ $item->namamitra }}</td>
                                                <td rowspan="{{$max_i}}">{{ $item->jenismitra }}</td>
                                                <td>MoA</td>
                                                <td>{{ $moa[0]->judul }}</td>
                                                <td><button class="btn btn-info" data-toggle="modal" data-target="#modal-xxl{{ $item->id }}"><i class="fa fa-eye"></i></button></a></td>
                                            </tr>

                                            @for($i=1; $i<$moa_i; $i++) <tr>
                                                <td>MoA</td>
                                                <td>{{ $moa[$i]->judul }}</td>
                                                <td><button class="btn btn-info" data-toggle="modal" data-target="#modal-xxl{{ $item->id }}"><i class="fa fa-eye"></i></button></a></td>
                                                </tr>
                                                @endfor

                                                @else
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->namamitra }}</td>
                                                    <td>{{ $item->jenismitra }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><button class="btn btn-info" data-toggle="modal" data-target="#modal-xxl{{ $item->id }}"><i class="fa fa-eye"></i></button></a></td>
                                                </tr>
                                                @endif

                                                <!-- modal untuk view profile mitra -->
                                                <div class="modal fade" id="modal-xxl{{ $item->id }}">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Profile Mitra</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <div class="form-group row">
                                                                        <label for="input" class="col-sm-2 col-form-label">Nama
                                                                            Mitra</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="namamitra" value="{{ $item->namamitra }}" disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="input" class="col-sm-2 col-form-label">Nama
                                                                            Kerja Sama</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="namamitra" value="{{ $item->judulkerjasama }}" disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="select" class="col-sm-2 col-form-label">Jenis
                                                                            Mitra</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="jenismitra" value="{{ $item->jenismitra }}" disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="select" class="col-sm-2 col-form-label">Lingkup
                                                                            Kerja Sama</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="lingkupkerja" value="{{ $item->lingkupkerja }}" disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Alamat</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="text" class="form-control " name="alamat" value="{{ $item->alamat }}" disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Negara</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="text" class="form-control " name="negara" value="{{ $item->negara }}" disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone Mitra</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="text" class="form-control " name="notelpmitra" value="{{ $item->notelpmitra }}" disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Website</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="url" class="form-control " name="website" value="{{ $item->website }}" disabled>
                                                                        </div><br><br><br>
                                                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Narahubung</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="text" class="form-control " name="notelpmitra" value="{{ $item->narahubung }}" disabled>
                                                                        </div><br><br><br>
                                                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone
                                                                            Narahubung</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="number" class="form-control " name="notelpnara" value="{{ $item->notelpnara }}" disabled>
                                                                        </div><br><br><br>
                                                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">PIC</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="text" class="form-control " name="pic" disabled value=@if($item->assignuserakun != null) @foreach($user as $u) @if($item->assignuserakun == $u->id)
                                                                            "{{ $u->nama }}"
                                                                            @break
                                                                            @endif @endforeach @endif>
                                                                        </div><br><br><br>
                                                                        <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone
                                                                            PIC</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="number" class="form-control " name="notelppic" @if($item->notelppic != null) value="{{ $item->notelppic }}"@endif disabled>
                                                                        </div><br><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <a href="{{ route('edit_mitra1', $item->id) }}">
                                                                    <button type="submit" class="btn btn-primary">Edit Data
                                                                        Mitra</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

    </section>
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