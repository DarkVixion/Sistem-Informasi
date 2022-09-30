@extends('AdminTemplate')
@section('isiAdmin')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Mitra</h1>
            </div>            
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/Mitra">Mitra</a></li>
                    <li class="breadcrumb-item active">Detail Mitra</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<div class="card card-info">
    <!-- form start -->
    <div class="card-body">
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">Nama Mitra</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="namamitra" placeholder="Masukan Nama Mitra" disabled>
            </div>
        </div><br>
        <div class="form-group row">
            <label for="select" class="col-sm-2 col-form-label">Jenis Mitra</label>
            <div class="col-sm-10">
                <div class="form-group">
                    <select class="form-control" name="jenismitra" disabled>
                        @foreach ($jm as $item)
                            <option>{{ $item->juduljenismitra }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="select" class="col-sm-2 col-form-label">Lingkup Kerja Sama</label>
            <div class="col-sm-10">
                <div class="form-group">
                    <select class="form-control" name="jenismitra" disabled>
                        @foreach ($lk as $item)
                            <option>{{ $item->judullingkupkerja }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row ">
            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Alamat</label>
            <div class="col-sm-10 ">
                <input type="text" class="form-control " name="alamat" placeholder="Masukan Alamat" disabled>
            </div>
            <br><br><br>            
            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Website</label>
            <div class="col-sm-10 ">
                <input type="url" class="form-control " name="website" placeholder="Masukan Website" disabled>
            </div><br><br><br>
            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Narahubung</label>
            <div class="col-sm-10 ">
                <input type="number" class="form-control " name="notelpmitra" placeholder="nama narahubung" disabled>
            </div><br><br><br>            
            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone Narahubung</label>
            <div class="col-sm-10 ">
                <input type="number" class="form-control " name="notelpmitra" placeholder="Masukan Nomor Telephone" disabled>
            </div><br><br><br>           
            <label for="inputPassword3 " class="col-sm-2 col-form-label ">PIC</label>
            <div class="col-sm-10 ">
                <input type="number" class="form-control " name="notelpmitra" placeholder="nama pic" disabled>
            </div><br><br><br>            
            <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone PIC</label>
            <div class="col-sm-10 ">
                <input type="number" class="form-control " name="notelpmitra" placeholder="Masukan Nomor Telephone" disabled>
            </div><br><br>
        </div>       

    </div>
    <!-- /.card-body -->
</div>
<!-- Main content -->

    <div class="col-sm-12">
        <a href="AdminViewMitraEdit">
            <button type="button" class="btn btn-default" data-toggle="modal"
                    data-target="#modal-xl"
                    style="float:right; background-color:lightblue; border-radius:15px;">
                    Edit
            </button>
        </a>
    </div>

    
    {{-- <div class="modal fade" id="modal-xl">
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
                            <input type="text" class="form-control" name="judullingkupkerja" id="inputPassword3" placeholder="Masukan Lingkup Kerja Sama Baru">
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
    </div> --}}
    <!-- /.modal -->

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
