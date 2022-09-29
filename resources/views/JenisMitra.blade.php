@extends('AdminTemplate')
@section('isiAdmin')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Jenis Mitra</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Master Data</li>
                    <li class="breadcrumb-item active">Jenis Mitra</li>
                </ol>
            </div>
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
                        <button type="button" class="btn btn-default" data-toggle="modal"
                            data-target="#modal-xl"
                            style="float:right; background-color:lightblue; border-radius:15px;">
                            Tambah Jenis Mitra
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Jenis Mitra</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jm as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->juduljenismitra }}</td>
                                    <td>
                                        <button class="btn btn-primary" data-target="#modal-xxl{{ $item->id }}" data-toggle="modal"><i class="fa fa-edit"></i></button>                                        
                                        <form action="{{route('hapus_mitra', $item->id)}}" method="POST" style="display:inline ">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- modal untuk edit -->
                                <div class="modal fade" id="modal-xxl{{ $item->id }}">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Jenis Mitra</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('edit_mitra', $item->id)}}" method="post">
                                            {!! csrf_field() !!}
                                            @method("PATCH")
                                            <div class="modal-body">
                                                <div class="form-group row ">
                                                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Jenis Mitra</label>
                                                    <div class="col-sm-10 ">
                                                        <input type="text" name="juduljenismitra" id="juduljenismitra" class="form-control " placeholder="Masukan Jenis Mitra Baru" value="{{ $item->juduljenismitra }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" value="Save">Simpan</button>
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
                    <h4 class="modal-title">Tambah Jenis Mitra Baru</h4>
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
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    
</section>

@endsection