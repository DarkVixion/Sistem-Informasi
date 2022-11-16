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
                        @foreach($years as $y)
                            <option value="{{ $loop->iteration }}">{{ $y }}</option>
                        @endforeach
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-5">
                    <div id="container1"></div>
                </div>
                <div class="col-sm-7">
                    <div id="container2"></div>
                </div>
            </div>
        </div>
        <div class="card card-body">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title text-bold text-lg">Status Kerja Sama</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div id="container"></div>
                </div>
                <div class="col-sm-7">
                    <div id="container4"></div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="card card-body">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title text-bold text-lg">Mitra</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="container3"></div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <div class="col-md-7">
                <div class="card card-body">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title text-bold text-lg">Nilai Kerja Sama</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8"></div>
                            <div class="col-sm-4">
                                <select class="form-control" id="ctgry">
                                    <option value="1">Terbesar</option>
                                    <option value="2">Terkecil</option>
                                </select>
                            </div>
                        </div><br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nama Mitra</th>
                                    <th style="width: 45%">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$loop->iteration</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card -->
                    <!-- /.col -->
                </div>
            </div>
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
    <script>
    Highcharts.chart('container3', {
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
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Chrome',
                y: 70
            }, {
                name: 'Edge',
                y: 14
            },  {
                name: 'Firefox',
                y: 4
            }, {
                name: 'Safari',
                y: 2
            }, {
                name: 'Internet Explorer',
                y: 1
            },  {
                name: 'Opera',
                y: 1
            }, {
                name: 'Sogou Explorer',
                y: 0
            }, {
                name: 'QQ',
                y: 0
            }, {
                name: 'Other',
                y: 2
            }]
        }]
    });

    Highcharts.chart('container4', {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
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

    @endsection