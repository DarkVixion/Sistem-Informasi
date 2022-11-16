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
                    <h3 class="card-title text-bold text-lg">Jenis Kerja Sama</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3">
                    <select class="form-control" id="chosenyear">
                        <option hidden>{{ $years[0] }}</option>
                        @foreach($years as $y)
                            <option value="{{ $loop->iteration }}">{{ $y }}</option>
                        @endforeach
                    </select>
                </div>
            </div><br>
            <div class="col-sm-12">
                <div id="container2"></div>
            </div>
            <!-- /.row -->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title text-bold text-lg">Status Kerja Sama</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="container"></div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title text-bold text-lg">Mitra</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="container1"></div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <div class="card card-body" style="display:none ;">
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
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nama Mitra</th>
                                    <th style="width: 50%">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach($nmitra as $nm)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $nm }}</td>
                                        <td>Rp {{ number_format($tots[$i]) }}</td>
                                    </tr>
                                    <?php $i++; ?>
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

    <script src="{{ asset('plugins/jquery/jquery.min.js') }} "></script>
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

    Highcharts.chart('container2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'MoU VS MoA'
        },
        xAxis: {
            categories: [
                'Jan','Feb','Mar','Apr',
                'May','Jun','Jul','Aug',
                'Sep','Okt','Nov','Dec'
            ],
            crosshair: true
        },
        yAxis: {
            title: {
                useHTML: true,
                text: 'Total'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.1,
                borderWidth: 0
            }
        },
        series: [{
            name: 'MoU',
            data: [13.93, 13.63, 13.73, 13.67, 14.37, 14.89, 14.56,
                14.32, 14.13, 13.93, 13.21, 12.16]

        }, {
            name: 'MoA',
            data: [12.24, 12.24, 11.95, 12.02, 11.65, 11.96, 11.59,
                11.94, 11.96, 11.59, 11.42, 11.76]

        }]
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#chosenyear').on('change', function() {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    url: '/getData1/' + id,
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            console.log(data.data1);
                            Highcharts.chart('container2', {
                                chart: {
                                    type: 'column'
                                },
                                title: {
                                    text: 'MoU VS MoA'
                                },
                                xAxis: {
                                    categories: [
                                        'Jan','Feb','Mar','Apr',
                                        'May','Jun','Jul','Aug',
                                        'Sep','Okt','Nov','Dec'
                                    ],
                                    crosshair: true
                                },
                                yAxis: {
                                    title: {
                                        useHTML: true,
                                        text: 'Total'
                                    }
                                },
                                tooltip: {
                                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                        '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                                    footerFormat: '</table>',
                                    shared: true,
                                    useHTML: true
                                },
                                plotOptions: {
                                    column: {
                                        pointPadding: 0.1,
                                        borderWidth: 0
                                    }
                                },
                                series: [{
                                    name: 'MoU',
                                    data: data.data1

                                }, {
                                    name: 'MoA',
                                    data: data.data2

                                }]
                            });
                        }
                    }
                });
            }
        });
    });
    </script>

    @endsection