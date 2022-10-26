@extends('UserTemplate')
@section('isiUser')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akun - Universitas Pertamina</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
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
</head>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Akun</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <section class="content">
        <form class="form-horizontal" action="{{ route('editdataakun', $akun->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-3">
                                <div class="d-flex justify-content-center">
                                    <img class=" profile-user-img img-fluid img-circle" 
                                    src=@if($akun->path_profile!=null) "{{ asset('profilpicuser/'.$akun->path_profile) }}" @else ../../dist/img/user2-160x160.jpg @endif alt=" User profile picture">
                                </div>
                                <h3 class="profile-username text-center"> {{ $akun->nama }} </h3>
                                <p class="text-muted text-center">Universitas Pertamina</p><br><br>
                                <div class="form-group row">
                                    <label for="path_mou" class="col-sm-2 col-form-label ">Foto Profile</label>
                                    <div class="col-sm-10 ">
                                        <input type="file" class="form-control " name="path_profileakun" accept="png/*">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" placeholder="Admin UPer" value="{{ $akun->nama }}">
                                    </div>
                                </div><br>
                                <div class=" form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Username SSO</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" placeholder="admin_UPer01" value="{{ $akun->username }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">E-Mail</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" placeholder="admin.uper@dududu.ac.id" value="{{ $akun->email }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nip" placeholder="122333" value="{{ $akun->nip }}">
                                    </div>
                                </div></br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="notelp" placeholder="0812xxx" value="{{ $akun->notelp }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <option value="" hidden>--- Role ---</option>
                                    <label for="select" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="role" value="{{ $akun->role }}" disabled>
                                                <option @if ($akun->role == 'Admin') selected @else "" @endif> Role 4</option>
                                                <option @if ($akun->role == 'Staff') selected @else "" @endif> Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="status" value="{{ $akun->status }}" disabled>
                                                <option @if ($akun->status == 'Aktif') selected @endif>Aktif</option>
                                                <option @if ($akun->status == 'Tidak Aktif') selected @endif>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                    <a href="javascript:history.back()">
                                        <button type="button" class="btn btn-default float-right" >Cancel</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <!-- /.card-body -->

        @endsection