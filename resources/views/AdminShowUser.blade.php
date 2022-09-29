@extends('AdminTemplate')
@section('isiAdmin')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
                {{-- </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">Jenis Mitra</li>
                </ol>
            </div> --}}
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
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl" style="float:right; background-color:lightblue; border-radius:15px;">
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
                                    {{-- <td>
                                        <a href="{{route('edit_kerjasama', $item->id)}}" ><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                    <form action="{{route('hapus_kerjasama', $item->id)}}" method="POST" style="display:inline ">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                    </td> --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($adminusermenu as $itemuser)
                                <tr>
                                    <td>{{ $itemuser->id }}</td>
                                <td>{{ $itemuser->namaakunuser }}</td>
                                <td>{{ $itemuser->ssoakunuser }}</td>
                                <td>{{ $itemuser->nipakunuser }}</td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                            <tbody>
                                {{-- @foreach($jm as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->juduljenismitra }}</td>
                                <td>
                                    <a data-toggle="modal" data-target="#modal-xl" href=""><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>

                                    <form action="{{route('hapus_mitra', $item->id)}}" method="POST" style="display:inline ">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach --}}
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

    {{-- <div class="modal fade" id="modal-xl">
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
                <input type="text" name="juduljenismitra" id="juduljenismitra" class="form-control " placeholder="Masukan Jenis Mitra Baru">
            </div>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" value="Save">Tambah</button>
    </div>
    </form>
    </div> --}}
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>

@endsection