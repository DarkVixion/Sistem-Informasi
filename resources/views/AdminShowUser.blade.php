@extends('AdminTemplate')
@section('isiAdmin')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
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
                    <div class="card-header">
                        <a href="/AdminUserMenu">
                            <button type="button" class="btn btn-default"
                                style="float:right; background-color:lightblue; border-radius:15px;">
                                Tambah User Baru
                            </button>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>NIP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($adminakunusershow as $itemuser)
                                <tr>
                                    <td>{{ $itemuser->id }}</td>
                                    <td>{{ $itemuser->namaakunuser }}</td>
                                    <td>{{ $itemuser->ssoakunuser }}</td>
                                    <td>{{ $itemuser->nipakunuser }}</td>
                                    <td><a href="{{route('view_user', $itemuser->id)}}"><button class="btn btn-info"><i
                                                    class="fa fa-eye"></i></button></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah User Baru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('tambah_mitra')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="modal-body">
                        <div class="form-group row ">
                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Jenis Mitra</label>
                            <div class="col-sm-10 ">
                                <input type="text" name="juduljenismitra" id="juduljenismitra" class="form-control "
                                    placeholder="Masukan Jenis Mitra Baru">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="Save">Tambah</button>
                    </div>
                </form>
            </div> -->
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>

@endsection