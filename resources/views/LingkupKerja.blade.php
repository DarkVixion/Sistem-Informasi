@extends('AdminTemplate')
@section('isiAdmin')
<style>
.pagination {
    padding-right: 1em;
    padding-bottom: 1em;
}

.dataTables_info {
    padding-left: 1em;
    padding-bottom: 1em;
}


.dataTables_filter {
    padding-right: 1em;
    padding-top: 1em;
}

.flex-container {
    display: flex;
    flex-wrap: nowrap;
}

.flex-container>div {
    margin: 3px;
}
</style>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Lingkup Kerja Sama</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Master Data</a></li>
                    <li class="breadcrumb-item active">Lingkup Kerja Sama</li>
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
            Tambah Lingkup Kerja Sama
        </button>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table id="example1" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 15%; text-align:center;">No. </th>
                                    <th>Lingkup Kerja Sama</th>
                                    <th style="width: 15%; text-align:center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lk as $item)
                                <tr>
                                    <td style="text-align:center;">{{ $loop->iteration }}</td>
                                    <td>{{ $item->judullingkupkerja }}</td>
                                    <td style="text-align:center;">
                                        <button class="btn btn-primary" data-target="#modal-xxl{{ $item->id }}"
                                            data-toggle="modal"><i class="fa fa-edit"></i></button>
                                        <form action="{{route('hapus_lingkup', $item->id)}}" method="POST"
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
                                                <h4 class="modal-title">Edit Lingkup Kerja Sama Baru</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('edit_lingkup', $item->id)}}" method="post">
                                                {!! csrf_field() !!}
                                                @method("PATCH")
                                                <div class="modal-body">
                                                    <div class="form-group row ">
                                                        <label for="inputPassword3 "
                                                            class="col-sm-2 col-form-label ">Lingkup Kerja Sama</label>
                                                        <div class="col-sm-10 ">
                                                            <input type="text" class="form-control"
                                                                name="judullingkupkerja" id="inputPassword3"
                                                                placeholder="Masukan Lingkup Kerja Sama Baru"
                                                                value="{{ $item->judullingkupkerja }}">
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

    <!-- modal untuk tambah lingkup -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Lingkup Kerja Sama Baru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('tambah_lingkup')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="modal-body">
                        <div class="form-group row ">
                            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Lingkup Kerja Sama</label>
                            <div class="col-sm-10 ">
                                <input type="text" class="form-control" name="judullingkupkerja" id="inputPassword3"
                                    placeholder="Masukan Lingkup Kerja Sama Baru">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="Save">Tambah Lingkup Kerja Sama</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

@endsection