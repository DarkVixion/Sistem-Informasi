@extends('AdminTemplate')
@section('isiAdmin')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Nama Mitra</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Master Data</li>
                    <li class="breadcrumb-item active">Nama Mitra</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="card-header">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl"
            style="float:right; background-color:lightblue; border-radius:15px;">
            Tambah Nama Mitra
        </button>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 15%; text-align:center;">No. </th>
                                    <th>Nama Mitra</th>
                                    <th style="width: 15%; text-align:center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nm as $item)
                                <tr>
                                    <td style="text-align:center;">{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td style="text-align:center;">
                                        <button class="btn btn-primary" data-target="#modal-xxl{{ $item->id }}"
                                            data-toggle="modal"><i class="fa fa-edit"></i></button>
                                        <form action="{{route('hapus_nama', $item->id)}}" method="POST"
                                            style="display:inline ">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- modal untuk edit -->
                                <div class="modal fade" id="modal-xxl{{ $item->id }}">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Nama Mitra</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('edit_nama', $item->id)}}" method="post">
                                                {!! csrf_field() !!}
                                                @method("PATCH")
                                                <div class="modal-body">
                                                    <div class="form-group row ">
                                                        <label for="inputPassword3 "
                                                            class="col-sm-2 col-form-label ">Nama Mitra</label>
                                                        <div class="col-sm-10 ">
                                                            <input type="text" name="nama" class="form-control "
                                                                placeholder="Masukan Nama Mitra Baru"
                                                                value="{{ $item->nama }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        value="Save">Simpan</button>
                                                </div>
                                            </form>
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
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- modal untuk tambah jenis -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Nama Mitra Baru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('tambah_nama')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="modal-body">
                        <div class="form-group row ">
                            <label for="inputPassword3 " class="col-sm-2 col-form-label">Nama Mitra</label>
                            <div class="col-sm-10 ">
                                <input type="text" name="nama" class="form-control "
                                    placeholder="Masukan Nama Mitra Baru">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="Save">Tambah</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


</section>

@endsection