@extends('AdminTemplate')
@section('isiAdmin')
<!-- Content Header (Page header) -->
<section class="content-header">
    <form class="form-horizontal" action="{{route('inputdata')}}" method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Informasi Mitra</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/Kerjasama">Detail</a></li>
                        <li class="breadcrumb-item active">Informasi Mitra</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Horizontal Form -->
        <div class="card card-info">

            <!-- form start -->
            <div class="card-body">
                <div class="form-group row">
                    <label for="select" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Aktif</option>
                                <option>Tidak Aktif</option>
                                <option>Kadarluwasa</option>
                                <option>Dalam Penjajakan</option>
                                <option>Perpanjangan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label">Nama Mitra</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NamaMitra" placeholder="Masukan Nama Mitra">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="select" class="col-sm-2 col-form-label">Jenis Mitra</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Pertamina</option>
                                <option>Non Pertamina</option>
                                <option>BUMN</option>
                                <option>Kementrian</option>
                                {{-- <option><a href='/JenisMitra'>Tambah Jenis Mitra</a></option> --}}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Judul Kerja Sama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="judulkerja" placeholder="Masukan Judul Kerja Sama">
                    </div>
                </div>.
                <div class="form-group row ">
                    <label for="select " class="col-sm-2 col-form-label ">Lingkup Kerja Sama</label>
                    <div class="col-sm-10 ">
                        <div class="form-group ">
                            <select class="form-control ">
                                <option>Beasiswa</option>
                                <option>Fast Track</option>
                                <option>MBKM</option>
                                <option>Magang</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Alamat</label>
                    <div class="col-sm-10 ">
                        <input type="text" class="form-control " id="alamat" placeholder="Masukan Alamat">
                    </div>
                    <br><br><br>
                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Negara</label>
                    <div class="col-sm-10 ">
                        <input type="text" class="form-control " id="negara" placeholder="Masukan Negara">
                    </div><br><br><br>
                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Nomor Telephone</label>
                    <div class="col-sm-10 ">
                        <input type="text" class="form-control " id="notelpmitra" placeholder="Masukan Nomor Telephone">
                    </div><br><br><br>
                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Website</label>
                    <div class="col-sm-10 ">
                        <input type="url" class="form-control " id="web" placeholder="Masukan Website">
                    </div><br><br><br>
                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Bulan Kerja Sama</label>
                    <div class="col-sm-10 ">
                        <input type="month" class="form-control " id="bulaninput">
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- Horizontal Form -->
        <div class="card card-info">

            <!-- form start -->

            @csrf
            <div class="card-body">

                <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label"> </label>
                    <div class="col-sm-10">
                        <h3 style="text-align: center;">Memorandum of Understanding (MoU)</h3>
                    </div>
                    <br><br><br>
                    <label for="judul_mou" class="col-sm-2 col-form-label">Judul Kerja Sama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('judul_mou') is-invalid @enderror" name="judul_mou" placeholder="Masukan Judul Kerja Sama">
                    </div>
                    <br><br><br>
                    <label for="tglmulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control @error('tglmulai') is-invalid @enderror" name="tglmulai">
                    </div>
                    <br><br><br>
                    <label for="tglselesai" class=" col-sm-2 col-form-label ">Tanggal Selesai</label>
                    <div class=" col-sm-10 ">
                        <input type="date" class="form-control @error('tglselesai') is-invalid @enderror" name="tglselesai">
                    </div>
                    <br><br><br>
                    <label for="path_mou" class="col-sm-2 col-form-label ">Dokumen MoU</label>
                    <div class="col-sm-10 ">
                        <input type="file" class="form-control " name="path_mou[]" accept="pdf/*" multiple>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->


        </div>

    
        <!-- Horizontal Form -->
        <div class="card card-info">

            <!-- form start -->
            @csrf
            <div class="card-body">

                <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label"> </label>
                    <div class="col-sm-10">
                        <h3 style="text-align: center;">Memorandum of Aggreement (MoA)</h3>
                    </div>
                    <br><br><br>
                    <label for="judul_moa" class="col-sm-2 col-form-label">Judul Kerjasama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('judul_moa') is-invalid @enderror" name="judul_moa" placeholder="Masukan Judul Kerja Sama">
                    </div>
                    <br><br><br>
                    <label for="nilaikontrak" class="col-sm-2 col-form-label">Nilai Kontrak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('nilaikontrak') is-invalid @enderror" name="nilaikontrak" placeholder="Masukan Nilai Kontrak">
                    </div>
                    <br><br><br>
                    <label for="tglmulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control @error('tglmulai') is-invalid @enderror" name="tglmulai">
                    </div>
                    <br><br><br>
                    <label for="tglselesai" class=" col-sm-2 col-form-label ">Tanggal Selesai</label>
                    <div class=" col-sm-10 ">
                        <input type="date" class="form-control @error('tglselesai') is-invalid @enderror" name="tglselesai">
                    </div>
                    <br><br><br>
                    <label for="path_moa" class="col-sm-2 col-form-label ">Dokumen MoA</label>
                    <div class="col-sm-10 ">
                        <input type="file" class="form-control" name="path_moa[]" accept="pdf/*" multiple>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>

        <div class="card card-info">

            <!-- form start -->
            <div class="card-body">

                <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label">Narahubung</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="narahubung" placeholder="Masukkan Narahubung">
                    </div>
                    <br><br><br>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="notelpnara" placeholder="No. Telepon">
                    </div>
                    <br><br><br>
                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Email</label>
                    <div class="col-sm-10 ">
                        <input type="text" class="form-control" id="emailnara" placeholder="Alamat Email">
                    </div>
                </div>

            </div>
        </div>

        <div class="card card-info">

            <!-- form start -->
            <div class="card-body">

                <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label">PIC UPer</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <select class="form-control" id="pic">
                                <option hidden>Pilih Nama PIC UPer</option>
                                <option>Bapak Abcd</option>
                                <option>Ibu Efgh</option>
                            </select>
                            
                        </div>                      
                    </div>
                    <br><br><br>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='notelppic' id="notelppic" placeholder="notelppic" value="" disabled>
                    </div>
                    <br><br><br>
                    <label for="inputPassword3 " class="col-sm-2 col-form-label ">Email</label>
                    <div class="col-sm-10 ">
                        <input type="text" class="form-control" name="emailpic" id="emailpic" placeholder="emailpic" value="" disabled>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class=" card-footer ">
                <button type="submit" class="btn btn-info">Simpan</button>
                <button type="submit" class="btn btn-default float-right">Buang</button>
            </div>
            <!-- /.card-footer -->
        </div>
    </form>
</section>
@endsection