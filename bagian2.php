<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
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


                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="col">
                                    <figure class="highcharts-figure">
                                      <div id="pre7"></div>
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
                                      <div id="post7"></div>
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
                                      <div id="pre8"></div>
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
                                      <div id="post8"></div>
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
    text: 'Soal PRE Test Bagian 2 Nomor 1'
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
      name: 'Tidak Sesuai',
      y: 2
    }, {
      name: 'Kurang Sesuai',
      y: 10
    }, {
      name: 'Netral',
      y: 210
    }, {
      name: 'Agak Sesuai',
      y: 230 
    }, {
      name: 'Sesuai',
      y: 689,
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
    text: 'Soal POST Test Bagian 2 Nomor 1'
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
      name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 8
    }, {
      name: 'Netral',
      y: 99
    }, {
      name: 'Agak Sesuai',
      y: 170  
    }, {
      name: 'Sesuai',
      y: 867,
      sliced: true,
      selected: true
    }]
  }]
});

// /------------------------/  //
Highcharts.chart('pre2', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 2'
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
      name: 'Tidak Sesuai',
      y: 39
    }, {
      name: 'Kurang Sesuai',
      y: 77
    }, {
      name: 'Netral',
      y: 324
    }, {
      name: 'Agak Sesuai',
      y: 271
    }, {
      name: 'Sesuai',
      y: 469,
      sliced: true,
      selected: true
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
    text: 'Soal POST Test Bagian 2 Nomor 2'
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
      name: 'Tidak Sesuai',
      y: 2
    }, {
      name: 'Kurang Sesuai',
      y: 5
    }, {
      name: 'Netral',
      y: 110
    }, {
      name: 'Agak Sesuai',
      y: 187
    }, {
      name: 'Sesuai',
      y: 834,
      sliced: true,
      selected: true
    }]
  }]
});
// /------------------------/  //

Highcharts.chart('pre3', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 3'
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
      name: 'Tidak Sesuai',
      y: 12
    }, {
      name: 'Kurang Sesuai',
      y: 33
    }, {
      name: 'Netral',
      y: 326
    }, {
      name: 'Agak Sesuai',
      y: 335
    }, {
      name: 'Sesuai',
      y: 435,
      sliced: true,
      selected: true
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
    text: 'Soal POST Test Bagian 2 Nomor 3'
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
      name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 3
    }, {
      name: 'Netral',
      y: 134
    }, {
      name: 'Agak Sesuai',
      y: 205
    }, {
      name: 'Sesuai',
      y: 734,
      sliced: true,
      selected: true
    }]
  }]
});
// /------------------------/  //
Highcharts.chart('pre4', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 4'
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
      name: 'Tidak Sesuai',
      y: 12
    }, {
      name: 'Kurang Sesuai',
      y: 59
    }, {
      name: 'Netral',
      y: 359,
      sliced: true,
      selected: true
    }, {
      name: 'Agak Sesuai',
      y: 319
    }, {
      name: 'Sesuai',
      y: 392
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
    text: 'Soal POST Test Bagian 2 Nomor 4'
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
      name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 8
    }, {
      name: 'Netral',
      y: 150
    }, {
      name: 'Agak Sesuai',
      y: 217
    }, {
      name: 'Sesuai',
      y: 761,
      sliced: true,
      selected: true
    }]
  }]
});
// /------------------------/  //
Highcharts.chart('pre5', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 5'
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
      name: 'Tidak Sesuai',
      y: 7
    }, {
      name: 'Kurang Sesuai',
      y: 16
    }, {
      name: 'Netral',
      y: 264
    }, {
      name: 'Agak Sesuai',
      y: 246
    }, {
      name: 'Sesuai',
      y: 608,
      sliced: true,
      selected: true
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
    text: 'Soal POST Test Bagian 2 Nomor 5'
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
     name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 6
    }, {
      name: 'Netral',
      y: 121
    }, {
      name: 'Agak Sesuai',
      y: 157
    }, {
      name: 'Sesuai',
      y: 852,
      sliced: true,
      selected: true
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
    text: 'Soal PRE Test Bagian 2 Nomor 6'
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
      name: 'Tidak Sesuai',
      y: 3
    }, {
      name: 'Kurang Sesuai',
      y: 14
    }, {
      name: 'Netral',
      y: 184
    }, {
      name: 'Agak Sesuai',
      y: 277
    }, {
      name: 'Sesuai',
      y: 676,
      sliced: true,
      selected: true
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
    text: 'Soal POST Test Bagian 2 Nomor 6'
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
     name: 'Tidak Sesuai',
      y: 1
    }, {
      name: 'Kurang Sesuai',
      y: 1
    }, {
      name: 'Netral',
      y: 108
    }, {
      name: 'Agak Sesuai',
      y: 158
    }, {
      name: 'Sesuai',
      y: 868,
      sliced: true,
      selected: true
    }]
  }]
});

// /------------------------/  //
Highcharts.chart('pre7', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 7'
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
      name: 'Tidak Sesuai',
      y: 1
    }, {
      name: 'Kurang Sesuai',
      y: 8
    }, {
      name: 'Netral',
      y: 175
    }, {
      name: 'Agak Sesuai',
      y: 198
    }, {
      name: 'Sesuai',
      y: 759,
      sliced: true,
      selected: true
    }]
  }]
});

  Highcharts.chart('post7', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Bagian 2 Nomor 7'
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
     name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 5
    }, {
      name: 'Netral',
      y: 99 
    }, {
      name: 'Agak Sesuai',
      y: 120
    }, {
      name: 'Sesuai',
      y: 912,
      sliced: true,
      selected: true
    }]
  }]
});
// /------------------------/  //

Highcharts.chart('pre8', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal PRE Test Bagian 2 Nomor 8'
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
      name: 'Tidak Sesuai',
      y: 4
    }, {
      name: 'Kurang Sesuai',
      y: 26
    }, {
      name: 'Netral',
      y: 246
    }, {
      name: 'Agak Sesuai',
      y: 219
    }, {
      name: 'Sesuai',
      y: 646,
      sliced: true,
      selected: true
    }]
  }]
});

  Highcharts.chart('post8', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Soal POST Test Bagian 2 Nomor 8'
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
     name: 'Tidak Sesuai',
      y: 0
    }, {
      name: 'Kurang Sesuai',
      y: 5
    }, {
      name: 'Netral',
      y: 115 
    }, {
      name: 'Agak Sesuai',
      y: 185
    }, {
      name: 'Sesuai',
      y: 831,
      sliced: true,
      selected: true
    }]
  }]
});


    </script>
</body>

</html>
