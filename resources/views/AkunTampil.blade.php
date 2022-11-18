@extends('AdminTemplate')
@section('isiAdmin')
<!-- Content Header (Page header) -->
<title>Akun - Universitas Pertamina</title>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Akun</h1>
            </div>
            <!-- /.col -->
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Akun</li>
                </ol>
            </div> -->
            <!-- /.col -->
        </div>
    </div>
    <!-- /.container-fluid -->

    <section class="content">
        <form class="form-horizontal" action="{{route('inputdataakun')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-3">
                                <div class="d-flex justify-content-center">
                                    <img class=" profile-user-img img-fluid img-circle"
                                        src="../../dist/img/user4-128x128.jpg" alt=" User profile picture">
                                </div>
                                <h3 class="profile-username text-center">Admin UPer</h3>
                                <p class="text-muted text-center">Universitas Pertamina</p><br><br>
                                <div class="form-group row">
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="namaakun" placeholder="Admin UPer"
                                            value='{{ $akun[1]->namaakun }}'>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Username SSO</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="userssoakun"
                                            placeholder="admin_UPer01" value='{{ $akun[1]->userssoakun }}'>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">E-Mail</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="emailakun"
                                            placeholder="admin.uper@dududu.ac.id">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nipakun" placeholder="122333">
                                    </div>
                                </div></br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="notelpakun" placeholder="0812xxx">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="roleakun">
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
                                            <select class="form-control" name="statusakun">
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