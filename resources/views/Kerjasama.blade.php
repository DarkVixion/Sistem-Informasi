@extends('AdminTemplate')
@section('isiAdmin')
<title>Rekap Kontrak - Universitas Pertamina</title>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Rekap Kontrak</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card-header">
        <a href="TambahKerja">
            <button type="button" class="btn btn-default float-right"
                style="background-color:lightblue; margin-right:5px;">
                Tambah Kerja Sama
            </button>
        </a>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-xl"
            style="margin-right:5px;">
            <i class="fas fa-plus"></i> Import Excel</button>
        <a href="/TambahKerja/export_excel" class="btn btn-danger float-right" target="_blank"
            style="margin-right:5px;">Export Excel</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="md-card-content">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bulan Pencatatan</th>
                                        <th>Nama</th>
                                        <th>Jenis Mitra</th>
                                        <th>Jenis Kerjasama</th>
                                        <!-- <th>Lingkup Kerja Sama</th> -->
                                        <!-- <th>Nilai Kontrak</th> -->
                                        <th>Periode Mulai Kerjasama</th>
                                        <th>Periode Berakhir Kerjasama</th>
                                        <th style="width:10%;">Misc.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kerjasama as $item)
                                    <?php
                                        // $moa = App\Models\MoA::where('tambah_kerjasama_id', $item->id)->first();
                                        // $mou = App\Models\MoU::where('tambah_kerjasama_id', $item->id)->first();
                                    
                                        $moa = App\Models\MoA::where('tambah_kerjasama_id', $item->id)->get();
                                        $mou = App\Models\MoU::where('tambah_kerjasama_id', $item->id)->get();
                                        $mou_i = count($mou);
                                        $moa_i = count($moa);
                                        $max_i = $mou_i + $moa_i;
                                    ?>

                                    @if ($mou_i != 0)
                                    <tr>
                                        <td rowspan="{{$max_i}}">{{ $item->bulaninput }}</td>
                                        <td rowspan="{{$max_i}}">{{ $item->namamitra }}</td>
                                        <td rowspan="{{$max_i}}">{{ $item->jenismitra }}</td>
                                        <td>MoU</td>
                                        <td style="text-align:center;">
                                            @if ( $mou[0]->tglmulai != null)
                                            {{ $mou[0]->tglmulai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                        <td style="text-align:center;">
                                            @if ( $mou[0]->tglselesai != null)
                                            {{ $mou[0]->tglselesai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                        <td rowspan="{{$max_i}}" style="vertical-align:middle;">
                                            <a href="{{route('edit_kerjasama', $item->id)}}"><button
                                                    class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                            <form action="{{route('hapus_kerjasama', $item->id)}}" method="POST"
                                                style="display:inline ">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>

                                    @for($i=1; $i<$mou_i; $i++) <tr>
                                        <td>MoU</td>
                                        <td style="text-align:center;">
                                            @if ( $mou[$i]->tglmulai != null)
                                            {{ $mou[0]->tglmulai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                        <td style="text-align:center;">
                                            @if ( $mou[$i]->tglselesai != null)
                                            {{ $mou[0]->tglselesai->format('d-m-Y') }}
                                            @endif
                                        </td>
                                        </tr>
                                        @endfor

                                        @if ($moa_i != 0)
                                        @for($i=0; $i<$moa_i; $i++) <tr>
                                            <td>MoA</td>
                                            <td style="text-align:center;">
                                                @if ( $moa[$i]->tglmulai != null)
                                                {{ $moa[0]->tglmulai->format('d-m-Y') }}
                                                @endif
                                            </td>
                                            <td style="text-align:center;">
                                                @if ( $moa[$i]->tglselesai != null)
                                                {{ $moa[0]->tglselesai->format('d-m-Y') }}
                                                @endif
                                            </td>
                                            </tr>
                                            @endfor
                                            @endif


                                            @elseif ($moa_i != 0)
                                            <tr>
                                                <td rowspan="{{$max_i}}">{{ $item->bulaninput }}</td>
                                                <td rowspan="{{$moa_i}}">{{ $item->namamitra }}</td>
                                                <td rowspan="{{$max_i}}">{{ $item->jenismitra }}</td>
                                                <td>MoA</td>
                                                <td style="text-align:center;">
                                                    @if ( $moa[0]->tglmulai != null)
                                                    {{ $moa[0]->tglmulai->format('d-m-Y') }}
                                                    @endif
                                                </td>
                                                <td style="text-align:center;">
                                                    @if ( $moa[0]->tglselesai != null)
                                                    {{ $moa[0]->tglselesai->format('d-m-Y') }}
                                                    @endif
                                                </td>
                                                <td rowspan="{{$max_i}}">
                                                    <a href="{{route('edit_kerjasama', $item->id)}}"><button
                                                            class="btn btn-primary"><i
                                                                class="fa fa-edit"></i></button></a>
                                                    <form action="{{route('hapus_kerjasama', $item->id)}}" method="POST"
                                                        style="display:inline ">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>

                                            @for($i=1; $i<$moa_i; $i++) <tr>
                                                <td>MoA</td>
                                                <td style="text-align:center;">
                                                    @if ( $moa[0]->tglmulai != null)
                                                    {{ $moa[0]->tglmulai->format('d-m-Y') }}
                                                    @endif
                                                </td>
                                                <td style="text-align:center;">
                                                    @if ( $moa[0]->tglselesai != null)
                                                    {{ $moa[0]->tglselesai->format('d-m-Y') }}
                                                    @endif
                                                </td>
                                                </tr>
                                                @endfor

                                                @else
                                                <tr>
                                                    <td>{{ $item->bulaninput }}</td>
                                                    <td>{{ $item->namamitra }}</td>
                                                    <td>{{ $item->jenismitra }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="{{route('edit_kerjasama', $item->id)}}"><button
                                                                class="btn btn-primary"><i
                                                                    class="fa fa-edit"></i></button></a>
                                                        <form action="{{route('hapus_kerjasama', $item->id)}}"
                                                            method="POST" style="display:inline ">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                @endif

                                                <!-- <td>
                                            <a href="{{route('edit_kerjasama', $item->id)}}"><button
                                                    class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                            <form action="{{route('hapus_kerjasama', $item->id)}}" method="POST"
                                                style="display:inline ">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td> -->
                                                </tr>
                                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- modal untuk tambah jenis -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Dengan Excel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('upload_excel')}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="modal-body">
                        <div class="form-group row ">
                            <label for="path_excel" class="col-sm-2 col-form-label">Import Excel</label>
                            <div class="col-sm-10 ">
                                <input type="file" class="form-control " name="path_excel" accept="pdf/*" multiple>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info float-right">Tambah file.xls</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection