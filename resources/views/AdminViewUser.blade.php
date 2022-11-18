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
        <form class="form-horizontal" action="{{ route('edit_user', $adminviewuser->id)}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-3">
                                <div class="d-flex justify-content-center">
                                    <img class=" profile-user-img img-fluid img-circle" alt=" User profile picture"
                                        src=@if($adminviewuser->path_profile!=null)
                                    "{{ asset('profilpicuser/'.$adminviewuser->path_profile) }}" @else
                                    ../../dist/img/user2-160x160.jpg @endif>
                                </div>
                                <h3 class="profile-username text-center">{{ $adminviewuser->nama }}</h3>
                                <p class="text-muted text-center">Universitas Pertamina</p><br><br>
                                <div class="form-group row">
                                    <label for="path_mou" class="col-sm-2 col-form-label ">Foto Profile</label>
                                    <div class="col-sm-10 ">
                                        <input type="file" class="form-control " name="path_profile" accept="png/*"
                                            multiple>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" placeholder="User UPer"
                                            value="{{ $adminviewuser->nama }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Username SSO</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username"
                                            placeholder="User_UPer01" value="{{ $adminviewuser->username }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="password"
                                            placeholder="User_UPer01" value="{{ $adminviewuser->password }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">E-Mail</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email"
                                            placeholder="User.uper@dududu.ac.id" value="{{ $adminviewuser->email }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="nip" placeholder="122333"
                                            onKeyPress="if(this.value.length==15) return false;"
                                            value="{{ $adminviewuser->nip }}">
                                    </div>
                                </div></br>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="notelp" placeholder="0812xxx"
                                            onKeyPress="if(this.value.length==15) return false;"
                                            value="{{ $adminviewuser->notelp }}">
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="role" value="{{ $adminviewuser->role }}">
                                                <option @if ($adminviewuser->role == 'Staff') selected @endif> Staff
                                                </option>
                                                <option @if ($adminviewuser->role == 'Admin') selected @endif> Admin
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="select" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="status"
                                                value="{{ $adminviewuser->status }}">
                                                <option @if ($adminviewuser->status == 'Aktif') selected @else ""
                                                    @endif>Aktif</option>
                                                <option @if ($adminviewuser->status == 'Tidak Aktif') selected @else ""
                                                    @endif>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                    <button type="button" onclick="history.back()"
                                        class="btn btn-default float-right">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </form>
        @endsection