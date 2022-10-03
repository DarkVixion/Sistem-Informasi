@extends('AdminTemplate')
@section('isiAdmin')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Detail Mitra</h1>
            </div>            
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/Mitra">Mitra</a></li>
                    <li class="breadcrumb-item active">Edit Detail Mitra</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<div class="card card-info">
    <!-- form start -->
    <form action="{{ route('update_mitra', $tks->id) }}" method="POST">
        @csrf
        @method("PATCH")
        <div class="card-body">
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Nama Mitra</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="namamitra" placeholder="Masukan Nama Mitra" value="{{ $tks->namamitra }}" >
                </div>
            </div><br>
            <div class="form-group row">
                <label for="select" class="col-sm-2 col-form-label">Jenis Mitra</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="form-control" name="jenismitra" >
                            <option selected hidden>{{ $tks->jenismitra }}</option>
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
                        <select class="form-control" name="lingkupkerja" >
                            <option selected hidden>{{ $tks->lingkupkerja }}</option>
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
                    <input type="text" class="form-control " name="alamat" placeholder="Masukan Alamat" value="{{ $tks->alamat }}" >
                </div>
                <br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">Website</label>
                <div class="col-sm-10 ">
                    <input type="url" class="form-control " name="website" placeholder="Masukan Website" value="{{ $tks->website }}" >
                </div><br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">Narahubung</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control " name="narahubung" placeholder="nama narahubung" value="{{ $tks->narahubung }}" >
                </div><br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone Narahubung</label>
                <div class="col-sm-10 ">
                    <input type="number" class="form-control " name="notelpnara" placeholder="Masukan Nomor Telephone" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==15) return false;" value="{{ $tks->notelpnara }}" >
                </div><br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">PIC</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control " name="pic" placeholder="nama pic" value="{{ $tks->pic }}" >
                </div><br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone PIC</label>
                <div class="col-sm-10 ">
                    <input type="number" class="form-control " name="notelppic" placeholder="Masukan Nomor Telephone" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==15) return false;" value="" >
                </div><br><br>
            </div>
        </div>
        <!-- /.card-body -->
        <div class=" card-footer ">
            <button class="btn btn-default" style="float:right; background-color:lightblue; border-radius:15px;">
                Simpan
            </button>
        </div>
    </form>

</div>
<!-- Main content -->



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