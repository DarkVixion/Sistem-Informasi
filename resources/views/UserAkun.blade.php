@extends('UserTemplate')
@section('isi')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-3">
                    <div class="d-flex justify-content-center"">
                        <img class=" profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt=" User profile picture">
                    </div>
                    <h3 class="profile-username text-center">User123</h3>
                    <p class="text-muted text-center">Universitas Pertamina</p><br><br>
                    <div class="form-group row">
                        <label for="input" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama" placeholder="User123">
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
                            <input type="text" class="form-control" id="Nama" placeholder="user.uper@dududu.ac.id">
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


@endsection