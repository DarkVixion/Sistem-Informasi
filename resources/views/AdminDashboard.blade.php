@extends('AdminTemplate')
@section('isiAdmin')

<!-- PreLoader -->
<title>Admin Dashboard| Universitas Pertamina</title>
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logo UP.jpeg" alt="AdminLTELogo" height="350" width="400">
</div>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-right">

                    <!-- <div class="form-group">
                        <div class="col-sm-13">
                            <input type="month" class="form-control " name="bulaninput">
                        </div>
                    </div>-
                    <div class="form-group">
                        <div class="col-sm-13">
                            <input type="month" class="form-control " name="bulaninput">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default" style="max-height: 38px;">
                        <i class=" fas fa-search"></i>
                    </button> -->

                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$countmou}}</h3>
                        <p>Memorandum of Understanding (MoU)</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/Kerjasama" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$countmoa}}</sup></h3>
                        <p>Memorandum of Aggrement (MoA)</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/Kerjasama" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$total}}</h3>
                        <p>Mitra</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/Mitra" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>Rp {{number_format($sum)}} </h3>
                        <p>Nilai Kerja Sama</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="Kerjasama" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="card card-body">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title text-bold text-lg">Status Kerja Sama</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="container"></div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <div class="card card-body">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title text-bold text-lg">Mitra</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="container1"></div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="card card-body" style="display:none;">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title text-bold text-lg">Jenis Kerja Sama</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <!-- /.col -->
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                            <h5><span>Total</span></h5>
                            </p>
                        </div>
                        <!-- callback Js for Chart dashboard3.js -->
                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="300"></canvas>
                        </div>
                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> MoA
                            </span>
                            <span>
                                <i class="fas fa-square text-gray"></i> MoU
                            </span>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <div class="card card-body">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title text-bold text-lg">Nilai Kerja Sama</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <div class="card-body">
                        <!-- <div class="input-group input-group-sm" style="width: 150px; float: right;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div> -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nama Mitra</th>
                                    <th style="width: 50%">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $inc = 0; ?>
                                @foreach($nmitra as $nm)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $nm }}</td>
                                        <td>{{ $tots[$inc] }}</td>
                                    </tr>
                                    <?php $inc++; ?>
                                @endforeach
                            </tbody>
                        </table>
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.row -->
        <!-- /.container-fluid -->
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:f}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Total',
            colorByPoint: true,
            data: [{
                name: 'Aktif',
                y: {{$aktif}}
            }, 
            {
                name: 'Tidak Aktif',
                y: {{$taktif}}
            }, 
            {
                name: 'Kedaluwarsa',
                y: {{$exp}}
            }, 
            {
                name: 'Perpanjangan',
                y: {{$pan}}
            }, 
            {
                name: 'Dalam Penjajakan',
                y: {{$pen}}
            }]
        }]
    });

    Highcharts.chart('container1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:f}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Total',
            colorByPoint: true,
            data: [{
                name: 'Pertamina',
                y: {{$tamin}}
            }, 
            {
                name: 'Non-Pertamina',
                y: {{$ntamin}}
            }, 
            {
                name: 'BUMN',
                y: {{$bumn}}
            }, 
            {
                name: 'Kementerian',
                y: {{$mentri}}
            },
            {
                name: 'Other',
                y: {{$other}}
            }]
        }]
    });
    </script>

    @endsection