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
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Akun</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">View dan Edit Akun</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.container-fluid -->

    <section class="content">
        <form class="form-horizontal" action="{{ route('edit_user', $adminviewuser->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-3">
                                <div class="d-flex justify-content-center">
                                    <img class=" profile-user-img img-fluid img-circle" src="{{ asset('profilpicuser/'.$adminviewuser->path_profileakunuser) }}" alt=" User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{ $adminviewuser->namaakunuser }}</h3>
                                <p class="text-muted text-center">Universitas Pertamina</p><br><br>
                                <div class="form-group row">
                                    <label for="path_mou" class="col-sm-2 col-form-label ">Foto Profile</label>
                                    <div class="col-sm-10 ">
                                        <input type="file" class="form-control " name="path_profileakunuser" accept="png/*" multiple>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="namaakunuser" placeholder="User UPer" value="{{ $adminviewuser->namaakunuser }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Username SSO</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ssoakunuser" placeholder="User_UPer01" value="{{ $adminviewuser->ssoakunuser }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="passwordakunuser" placeholder="User_UPer01" value="{{ $adminviewuser->passwordakunuser }}"><!-- buat kolom db baru?-->
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">E-Mail</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="emailakunuser" placeholder="User.uper@dududu.ac.id" value="{{ $adminviewuser->emailakunuser }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nipakunuser" placeholder="122333" value="{{ $adminviewuser->nipakunuser }}">
                                    </div>
                                </div></br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="notelpakunuser" placeholder="0812xxx" value="{{ $adminviewuser->notelpakunuser }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="roleakunuser" value="{{ $adminviewuser->roleakunuser }}">
                                                <option @if ($adminviewuser->roleakunuser == 'Role 1') selected @else "" @endif> Role 1</option>
                                                <option @if ($adminviewuser->roleakunuser == 'Role 2') selected @else "" @endif> Role 2</option>
                                                <option @if ($adminviewuser->roleakunuser == 'Role 3') selected @else "" @endif> Role 3</option>
                                                <option @if ($adminviewuser->roleakunuser == 'Role 4') selected @else "" @endif >Role 4</option>
                                                <option @if ($adminviewuser->roleakunuser == 'Staff') selected @else "" @endif> Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="statusakunuser" value="{{ $adminviewuser->statusakunuser }}">
                                                <option @if ($adminviewuser->statusakunuser == 'Aktif') selected @else "" @endif>Aktif</option>
                                                <option @if ($adminviewuser->statusakunuser == 'Tidak Aktif') selected @else "" @endif>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                    <button type="button" onclick="history.back()" class="btn btn-default float-right">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </form>
        @endsection