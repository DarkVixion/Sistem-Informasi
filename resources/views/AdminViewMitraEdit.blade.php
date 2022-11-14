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
                    <input type="text" class="form-control" name="namamitra" placeholder="Masukan Nama Mitra" value="{{ $tks->namamitra }}">
                </div>
            </div><br>
            <div class="form-group row">
                <label for="select" class="col-sm-2 col-form-label">Jenis Mitra</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="form-control" name="jenismitra">
                            <option selected hidden>{{ $tks->jenismitra }}</option>
                            @foreach ($jm as $item)
                            <option>{{ $item->juduljenismitra }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row ">
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">Alamat</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control " name="alamat" placeholder="Masukan Alamat" value="{{ $tks->alamat }}">
                </div>
                <br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">Website</label>
                <div class="col-sm-10 ">
                    <input type="url" class="form-control " name="website" placeholder="Masukan Website" value="{{ $tks->website }}">
                </div><br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">Narahubung</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control " name="narahubung" placeholder="nama narahubung" value="{{ $tks->narahubung }}">
                </div><br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone Narahubung</label>
                <div class="col-sm-10 ">
                    <input type="number" class="form-control " name="notelpnara" placeholder="Masukan Nomor Telephone" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==15) return false;" value="{{ $tks->notelpnara }}">
                </div><br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">PIC</label>
                <div class="col-sm-10 ">
                    <div class="form-group">
                        <select class="form-control" name="pic" id="pic">
                            @if ($tks->assignuserakun == null)
                            <option value="" hidden>--- Pilih PIC ---</option>
                            @endif

                            @foreach($user as $u)
                            <option value="{{ $u->id }}" <?php if($tks->assignuserakun == $u->id){echo('selected');} ?>>{{ $u->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div><br><br><br>
                <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone PIC</label>
                <div class="col-sm-10 ">
                    <input type="number" class="form-control" name='notelppic' id="notelppic" placeholder="No Telepon PIC" @if($tks->notelppic != null) value="{{ $tks->notelppic }}"@endif readonly>
                </div><br><br>
            </div>
        </div>
        <!-- /.card-body -->
        <div class=" card-footer ">
            <button type="button" class="btn btn-default" onclick="history.back()" style="background-color:lightgray; border-radius:15px;">
                Cancel
            </button>
            <button class="btn btn-default" style="float:right; background-color:lightblue; border-radius:15px;">
                Simpan
            </button>
        </div>
    </form>

</div>
<!-- Main content -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }} "></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
$(document).ready(function() {
    $('#pic').on('change', function() {
        var picID = $(this).val();
        if (picID) {
            $.ajax({
                url: '/getData/' + picID,
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function(data) {
                    if (data) {
                        document.getElementById('notelppic').value = data.notelp;
                    }
                }
            });
        }
    });
});
</script>

@endsection