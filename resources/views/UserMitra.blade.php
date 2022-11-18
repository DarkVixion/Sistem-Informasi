@extends('UserTemplate')
@section('isiUser')
<title>Mitra - Universitas Pertamina</title>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Mitra</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Profile Mitra</th>
                                        <th>Jenis Mitra</th>
                                        <th>Jenis Kontrak</th>
                                        <th>Judul Kerjasama</th>
                                        <th style="width: 10%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tks as $item)
                                    <?php
                                            $moa = App\Models\MoA::where('tambah_kerjasama_id', $item->id)->get();
                                            $mou = App\Models\MoU::where('tambah_kerjasama_id', $item->id)->get();
                                            $mou_i = count($mou);
                                            $moa_i = count($moa);
                                            $max_i = $mou_i + $moa_i;
                                        ?>

                                    @if ($mou_i != 0)
                                    <tr>
                                        <td rowspan="{{$max_i}}">{{ $loop->iteration }}</td>
                                        <td rowspan="{{$max_i}}">{{ $item->namamitra }}</td>
                                        <td rowspan="{{$max_i}}">{{ $item->jenismitra }}</td>
                                        <td>&nbsp;&ensp;MoU</td>
                                        <td>{{ $mou[0]->Judul }}</td>
                                        <td><button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-xxl{{ $item->id }}"><i
                                                    class="fa fa-eye"></i></button>
                                            </a></td>
                                    </tr>

                                    @for($i=1; $i<$mou_i; $i++) <tr>
                                        <td>MoU</td>
                                        <td>{{ $mou[$i]->Judul }}</td>
                                        <td><button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-xxl{{ $item->id }}"><i
                                                    class="fa fa-eye"></i></button></a></td>
                                        </tr>
                                        @endfor

                                        @if ($moa_i != 0)
                                        @for($i=0; $i<$moa_i; $i++) <tr>
                                            <td>MoA</td>
                                            <td>{{ $moa[$i]->judul }}</td>
                                            <td><button class="btn btn-info" data-toggle="modal"
                                                    data-target="#modal-xxl{{ $item->id }}"><i
                                                        class="fa fa-eye"></i></button></a></td>
                                            </tr>
                                            @endfor
                                            @endif

                                            @elseif ($moa_i != 0)
                                            <tr>
                                                <td rowspan="{{$moa_i}}">{{ $loop->iteration }}</td>
                                                <td rowspan="{{$moa_i}}">{{ $item->namamitra }}</td>
                                                <td rowspan="{{$max_i}}">{{ $item->jenismitra }}</td>
                                                <td>MoA</td>
                                                <td>{{ $moa[0]->judul }}</td>
                                                <td><button class="btn btn-info" data-toggle="modal"
                                                        data-target="#modal-xxl{{ $item->id }}"><i
                                                            class="fa fa-eye"></i></button></a></td>
                                            </tr>

                                            @for($i=1; $i<$moa_i; $i++) <tr>
                                                <td>MoA</td>
                                                <td>{{ $moa[$i]->judul }}</td>
                                                <td><button class="btn btn-info" data-toggle="modal"
                                                        data-target="#modal-xxl{{ $item->id }}"><i
                                                            class="fa fa-eye"></i></button></a></td>
                                                </tr>
                                                @endfor

                                                @else
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->namamitra }}</td>
                                                    <td>{{ $item->jenismitra }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><button class="btn btn-info" data-toggle="modal"
                                                            data-target="#modal-xxl{{ $item->id }}"><i
                                                                class="fa fa-eye"></i></button></a></td>
                                                </tr>
                                                @endif

                                                <!-- modal untuk view profile mitra -->
                                                <div class="modal fade" id="modal-xxl{{ $item->id }}">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Profile Mitra</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <div class="form-group row">
                                                                        <label for="input"
                                                                            class="col-sm-2 col-form-label">Nama
                                                                            Mitra</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                name="namamitra"
                                                                                value="{{ $item->namamitra }}" disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="input"
                                                                            class="col-sm-2 col-form-label">Nama
                                                                            Kerja Sama</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                name="namamitra"
                                                                                value="{{ $item->judulkerjasama }}"
                                                                                disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="select"
                                                                            class="col-sm-2 col-form-label">Jenis
                                                                            Mitra</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                name="jenismitra"
                                                                                value="{{ $item->jenismitra }}"
                                                                                disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="select"
                                                                            class="col-sm-2 col-form-label">Lingkup
                                                                            Kerja Sama</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                name="lingkupkerja"
                                                                                value="{{ $item->lingkupkerja }}"
                                                                                disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="inputPassword3 "
                                                                            class="col-sm-2 col-form-label ">Alamat</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="text" class="form-control "
                                                                                name="alamat"
                                                                                value="{{ $item->alamat }}" disabled>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <label for="inputPassword3 "
                                                                            class="col-sm-2 col-form-label ">Website</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="url" class="form-control "
                                                                                name="website"
                                                                                value="{{ $item->website }}" disabled>
                                                                        </div><br><br><br>
                                                                        <label for="inputPassword3 "
                                                                            class="col-sm-2 col-form-label ">Narahubung</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="text" class="form-control "
                                                                                name="notelpmitra"
                                                                                value="{{ $item->narahubung }}"
                                                                                disabled>
                                                                        </div><br><br><br>
                                                                        <label for="inputPassword3 "
                                                                            class="col-sm-2 col-form-label ">Nomor
                                                                            Telephone
                                                                            Narahubung</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="number" class="form-control "
                                                                                name="notelpnara"
                                                                                value="{{ $item->notelpnara }}"
                                                                                disabled>
                                                                        </div><br><br><br>
                                                                        <label for="inputPassword3 "
                                                                            class="col-sm-2 col-form-label ">PIC</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="text" class="form-control "
                                                                                name="pic" disabled
                                                                                value=@if(count($user) !=0 &&
                                                                                $item->assignuserakun != null)
                                                                            "{{ $user[($item->assignuserakun)-1]->namaakunuser }}"
                                                                            @endif>
                                                                        </div><br><br><br>
                                                                        <label for="inputPassword3 "
                                                                            class="col-sm-2 col-form-label ">Nomor
                                                                            Telephone
                                                                            PIC</label>
                                                                        <div class="col-sm-10 ">
                                                                            <input type="number" class="form-control "
                                                                                name="notelppic" @if(count($user) !=0 &&
                                                                                $item->assignuserakun !=
                                                                            null)value="{{ $user[($item->assignuserakun)-1]->notelpakunuser }}"@endif
                                                                            disabled>
                                                                        </div><br><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

    </section>
</section>


@endsection