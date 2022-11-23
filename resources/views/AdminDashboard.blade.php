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
                        <h4>{{$countmou}}</h4>
                        <p style="font-size:13px;">Memorandum of Understanding (MoU)</p>
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
                        <h4>{{$countmoa}}</h4>
                        <p style="font-size:13px;">Memorandum of Aggrement (MoA)</p>
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
                        <h4>{{$mitra}}</h4>
                        <p style="font-size:13px;">Mitra</p>
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
                        <h4>Rp {{number_format($sum)}} </h4>
                        <p style="font-size:13px;">Nilai Kerja Sama</p>
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
                    <div id="pie-mou-moa"></div>
                </div>
                <div class="col-sm-7">
                    <div id="bar-mou-moa"></div>
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
                    <div id="pie-status"></div>
                </div>
                <div class="col-sm-7">
                    <div id="bar-status"></div>
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
                            <div id="pie-mitra"></div>
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
    Highcharts.chart('pie-status', {
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
                y: {{$paktif}}
            }, 
            {
                name: 'Tidak Aktif',
                y: {{$ptaktif}}
            }, 
            {
                name: 'Kedaluwarsa',
                y: {{$pexp}}
            }, 
            {
                name: 'Perpanjangan',
                y: {{$ppan}}
            }, 
            {
                name: 'Dalam Penjajakan',
                y: {{$ppen}}
            }]
        }]
    });
    Highcharts.chart('pie-mou-moa', {
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
                name: 'MoU',
                y: {{$pmous}}
            }, 
            {
                name: 'MoA',
                y: {{$pmoas}}
            }]
        }]
    });
    Highcharts.chart('bar-mou-moa', {
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
            data: [<?php echo implode(',', $bmous) ?>]
        }, {
            name: 'MoA',
            data: [<?php echo implode(',', $bmoas) ?>]
        }]
    });
    Highcharts.chart('pie-mitra', {
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
                y: 7
            }, {
                name: 'Edge',
                y: 4
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
                y: 5
            }, {
                name: 'QQ',
                y: 3
            }, {
                name: 'Other',
                y: 2
            }]
        }]
    });
    Highcharts.chart('bar-status', {
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
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
                name: 'Aktif',
                data: [<?php echo implode(',', $baktif) ?>]
            }, 
            {
                name: 'Tidak Aktif',
                data: [<?php echo implode(',', $btaktif) ?>]
            }, 
            {
                name: 'Kedaluwarsa',
                data: [<?php echo implode(',', $bkeda) ?>]
            }, 
            {
                name: 'Perpanjangan',
                data: [<?php echo implode(',', $bper) ?>]
            }, 
            {
                name: 'Dalam Penjajakan',
                data: [[<?php echo implode(',', $bpen) ?>]]
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
                            Highcharts.chart('pie-status', {
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
                                        y: data.data10
                                    }, 
                                    {
                                        name: 'Tidak Aktif',
                                        y: data.data11
                                    }, 
                                    {
                                        name: 'Kedaluwarsa',
                                        y: data.data12
                                    }, 
                                    {
                                        name: 'Perpanjangan',
                                        y: data.data13
                                    }, 
                                    {
                                        name: 'Dalam Penjajakan',
                                        y: data.data13
                                    }]
                                }]
                            });
                            Highcharts.chart('pie-mou-moa', {
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
                                        name: 'MoU',
                                        y: data.data8
                                    }, 
                                    {
                                        name: 'MoA',
                                        y: data.data9
                                    }]
                                }]
                            });
                            Highcharts.chart('bar-mou-moa', {
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
                            Highcharts.chart('pie-mitra', {
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
                                        y: 9
                                    }, {
                                        name: 'Edge',
                                        y: 2
                                    },  {
                                        name: 'Firefox',
                                        y: 8
                                    }, {
                                        name: 'Safari',
                                        y: 4
                                    }, {
                                        name: 'Internet Explorer',
                                        y: 5
                                    },  {
                                        name: 'Opera',
                                        y: 6
                                    }, {
                                        name: 'Sogou Explorer',
                                        y: 10
                                    }, {
                                        name: 'QQ',
                                        y: 15
                                    }, {
                                        name: 'Other',
                                        y: 13
                                    }]
                                }]
                            });
                            Highcharts.chart('bar-status', {
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
                                        pointPadding: 0.2,
                                        borderWidth: 0
                                    }
                                },
                                series: [{
                                        name: 'Aktif',
                                        data: data.data3
                                    }, 
                                    {
                                        name: 'Tidak Aktif',
                                        data: data.data4
                                    }, 
                                    {
                                        name: 'Kedaluwarsa',
                                        data: data.data5
                                    }, 
                                    {
                                        name: 'Perpanjangan',
                                        data: data.data6
                                    }, 
                                    {
                                        name: 'Dalam Penjajakan',
                                        data: data.data7
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