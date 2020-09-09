<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/ump.png">
    <title>Laporan Success 2020</title>
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <style type="">
    .highcharts-figure, .highcharts-data-table table {
  min-width: 320px; 
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}


input[type="number"] {
    min-width: 50px;
}

</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="#"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">Success 2020</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="ti-search"></i></a>
                        </form>
                    </li>

                    
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar nicescroll" role="navigation">
            <div class="sidebar-nav navbar-collapse ">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
                            </span>
                        </div>
                    </li>
                    <li>
                        <a href="index.php" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="bagian2.php" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i> Grafik Bagian 2</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="ti-info fa-fw"></i> Error 404</a>
                    </li>
                </ul>
                
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Grafik Jawaban soal PRE dan POST Success 2020</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Grafik</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="pre1"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="post1"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                   
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="pre2"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="post2"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="pre3"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="post3"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="pre4"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="post4"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="pre5"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="post5"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="pre6"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="post6"></div>
                                      <p class="highcharts-description">
                                      </p>
                                    </figure>
                                    
                                   
                            </div>
                        </div>
                    </div>



                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <footer class="footer text-center"> 2020 &copy; Yudistira Ergha R </footer>
        <footer class="footer text-center"> 2020 &copy; Yudistira Ergha R </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="js/jquery.nicescroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/myadmin.js"></script>
    <script>
    Highcharts.chart('pre1', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Nomor 1'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 122
    }, {
      name: 'Jawaban B',
      y: 258
    }, {
      name: 'Jawaban C',
      y: 761,
      sliced: true,
      selected: true
    }]
  }]
});
    Highcharts.chart('post1', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Nomor 1'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 111
    }, {
      name: 'Jawaban B',
      y: 185
    }, {
      name: 'Jawaban C',
      y: 840,
      sliced: true,
      selected: true
    }]
  }]
});

    //-----------------//
Highcharts.chart('pre2', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Nomor 2'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 911,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban B',
      y: 152
    }, {
      name: 'Jawaban C',
      y: 78
    }]
  }]
});

Highcharts.chart('post2', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Nomor 2'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 1015,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban B',
      y: 79
    }, {
      name: 'Jawaban C',
      y: 42
    }]
  }]
});
    //-----------------//
Highcharts.chart('pre3', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Nomor 3'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 398
    }, {
      name: 'Jawaban B',
      y: 603,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban C',
      y: 140
    }]
  }]
});


Highcharts.chart('post3', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Nomor 3'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 425
    }, {
      name: 'Jawaban B',
      y: 603,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban C',
      y: 108
    }]
  }]
});


    //-----------------//
Highcharts.chart('pre4', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Nomor 4'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 68
    }, {
      name: 'Jawaban B',
      y: 1052,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban C',
      y: 21
    }]
  }]
});


Highcharts.chart('post4', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Nomor 4'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 39
    }, {
      name: 'Jawaban B',
      y: 1046,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban C',
      y: 39
    }]
  }]
});
    //-----------------//
Highcharts.chart('pre5', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Nomor 5'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 900,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban B',
      y: 237
    }, {
      name: 'Jawaban C',
      y: 4
    }]
  }]
});


Highcharts.chart('post5', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Nomor 5'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
       name: 'Jawaban A',
      y: 1019,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban B',
      y: 116
    }, {
      name: 'Jawaban C',
      y: 1
    }]
  }]
});
// /------------------------/  //
Highcharts.chart('pre6', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Nomor 6'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
      name: 'Jawaban A',
      y: 575,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban B',
      y: 465
    }, {
      name: 'Jawaban C',
      y: 101
    }]
  }]
});


Highcharts.chart('post6', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Nomor 6'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Jumlah Pemilih',
    colorByPoint: true,
    data: [{
       name: 'Jawaban A',
      y: 493
    }, {
      name: 'Jawaban B',
      y: 572,
      sliced: true,
      selected: true
    }, {
      name: 'Jawaban C',
      y: 71
    }]
  }]
});
    //-----------------//

    //-----------------//

    //-----------------//

    //-----------------//

    //-----------------//

    //-----------------//



    </script>
</body>

</html>
