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
    <form action="{{route('mitra.update', $tks->id)}}" method="POST">
        @csrf
        @method("PATCH")
        <div class="card-body">
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Nama Mitra</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Mitra" value="{{ $tks->nama }}">
                </div>
            </div>
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
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="website" placeholder="Website" value="{{ $tks->website }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Nomor Telephone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="notelpmitra" placeholder="Nomor Telephone" value="{{ $tks->notelpmitra }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $tks->alamat }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Negara</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="negara" placeholder="Negara" value="{{ $tks->negara }}">
                </div>
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
<script src="plugins/jquery/jquery.min.js"></script>
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
                        document.getElementById('notelppic').value = '123445';
                    }
                }
            });
        }
    });
});
</script>

@endsection