@extends('AdminTemplate')

@yield('isiAdmin')
<title>Akun - Universitas Pertamina</title>
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
                    <li class="breadcrumb-item active">View Akun</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.container-fluid -->

    <section class="content">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-3">
                                <div class="d-flex justify-content-center">
                                    <img class=" profile-user-img img-fluid img-circle"
                                        src="../../dist/img/user2-160x160.jpg" alt=" User profile picture">
                                </div>
                                <h3 class="profile-username text-center">User UP</h3>
                                <p class="text-muted text-center">Universitas Pertamina</p><br><br>
                                <!-- <div class="form-group row">
                                    <label for="path_mou" class="col-sm-2 col-form-label ">Foto Profile</label>
                                    <div class="col-sm-10 ">
                                        <input type="file" class="form-control " name="path_profileakunuser" accept="png/*" multiple>
                                    </div>
                                </div><br> -->
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="namaakunuser"
                                            placeholder="User UPer" value="{{ $adminviewuser->namaakunuser }}" disabled>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Username SSO</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ssoakunuser"
                                            placeholder="User_UPer01" value="{{ $adminviewuser->ssoakunuser }}"
                                            disabled>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="passwordakunuser"
                                            placeholder="User_UPer01" value="{{ $adminviewuser->passwordakunuser }}"
                                            disabled><!-- buat kolom db baru?-->
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">E-Mail</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="emailakunuser"
                                            placeholder="User.uper@dududu.ac.id"
                                            value="{{ $adminviewuser->emailakunuser }}" disabled>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nipakunuser" placeholder="122333"
                                            value="{{ $adminviewuser->nipakunuser }}" disabled>
                                    </div>
                                </div></br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="notelpakunuser"
                                            placeholder="0812xxx" value="{{ $adminviewuser->notelpakunuser }}" disabled>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="roleakunuser"
                                                value="{{ $adminviewuser->roleakunuser }}" disabled>
                                                <option>Role 1</option>
                                                <option>Role 2</option>
                                                <option>Role 3</option>
                                                <option>Role 4</option>
                                                <option>Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="statusakunuser"
                                                value="{{ $adminviewuser->statusakunuser }}" disabled>
                                                <option>Aktif</option>
                                                <option>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info float-right">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- /.card-body -->

            @endsection