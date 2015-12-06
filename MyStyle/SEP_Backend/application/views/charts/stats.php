<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Style Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Browser Statistic
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="con_home">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Charts
                        </li>
                    </ol>
                </div>
            </div>
            </div>
            <!-- /.row -->

            <div class="form-group">
                <h3><b>Browser Stats</b></h3>

            </div>

            </br></br>


            <table   align="right"  width="30%" style="margin-top: 5px ;margin-right: 300px;padding: 5px">
                <tr>
                    <th>Entry</th>
                    <th>page View</th>

                </tr>
                    <tr>

                    </tr>
                <?php
                // get the list of visitors

                //$query = "select * from tracker";
                //$result = mysql_query($query);
                $count=0;
                foreach($result as $row)
                {

                    ?>
                    <tr>
                        <td><?php echo $row->http_user_agent ?></td>
                        <td><?php echo $row->total  ?></td>

                    </tr>
                <?php
                }?>

            </table>
            <div class="container">

                <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" type="text/css">
               <script src="<?php echo base_url(); ?>/assets/js/amcharts.js" type="text/javascript"></script>

                <script src="<?php echo base_url(); ?>/assets/js/pie.js" type="text/javascript"></script>

                <script src="<?php echo base_url(); ?>/assets/js/serial.js" type="text/javascript"></script>


                    <div class="panel-body">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-pie-chart">



                                <script type="text/javascript">



                                    var chart;
                                    var legend;
                                    var chartData = [
                                        <?php foreach($result as $row) {?>

                                        {
                                            "country": " <?php echo $row->http_user_agent ?>",
                                            "value": <?php echo   $row->total ?>
                                        },


                                        <?php } ?>
                                    ];

                                    AmCharts.ready(function () {
                                        // PIE CHART
                                        chart = new AmCharts.AmPieChart();
                                        chart.dataProvider = chartData;
                                        chart.titleField = "country";
                                        chart.valueField = "value";
                                        chart.outlineColor = "#FFFFFF";
                                        chart.outlineAlpha = 0.8;
                                        chart.outlineThickness = 2;
                                        chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
                                        // this makes the chart 3D
                                        chart.depth3D = 15;
                                        chart.angle = 30;

                                        // WRITE
                                        chart.write("chartdiv");
                                    });
                                </script>




                                <div id="chartdiv" style="width: 50%; height: 600px;position: absolute;left:150px; top:150px"></div>

                        </div>
                        </div>
                        </div>


                        <div class="text-right">
                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        <!--newly added sithira -->  <!--newly added sithira -->  <!--newly added sithira -->  <!--newly added sithira -->




<!--



                    <!-- scripts for exporting chart as an image -->
                    <!-- Exporting to image works on all modern browsers except IE9 (IE10 works fine) -->
                    <!-- Note, the exporting will work only if you view the file from web server -->
                    <!--[if (!IE) | (gte IE 10)]> -->

                    </div>
                    </body>
                </div>


    <script src="<?php echo base_url(); ?>/assets/js/amcharts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/serial.js" type="text/javascript"></script>


    <!-- scripts for exporting chart as an image -->
    <!-- Exporting to image works on all modern browsers except IE9 (IE10 works fine) -->
    <!-- Note, the exporting will work only if you view the file from web server -->
    <!--[if (!IE) | (gte IE 10)]> -->

    <script src="<?php echo base_url(); ?>/assets/js/export.js" type="text/javascript"></script>


    <link href="<?php echo  base_url('/assets/css/export.css') ?>" rel="stylesheet" type="text/css" />
    <!-- <![endif]-->
    <?php $count=0;


    $array = array("#FF0F00","#FF6600","#FF6600","#FF9E01","#F8FF01","#0D52D1","#2A0CD0");
    ?>


    <script type="text/javascript">
        var chart;

        var chartData = [

            <?php foreach($result1 as $row) {$count++;?>

            {
                "country":  " <?php echo $row->country ?>",
                "visits":  <?php echo $row->total ?>,

                "color": "<?php echo $array[ rand ( 0 ,5)] ?>"
            },
            <?php }?>


        ];


        var chart = AmCharts.makeChart("chartdiv", {
            type: "serial",
            dataProvider: chartData,
            categoryField: "country",
            pathToImages:"../amcharts/images/",
            depth3D: 20,
            angle: 30,

            categoryAxis: {
                labelRotation: 90,
                gridPosition: "start"
            },

            valueAxes: [{
                title: "Visitors"
            }],

            graphs: [{

                valueField: "visits",
                colorField: "color",
                type: "column",
                lineAlpha: 0,
                fillAlphas: 1
            }],

            chartCursor: {
                cursorAlpha: 0,
                zoomable: false,
                categoryBalloonEnabled: false
            },
            "export": {
                "enabled": true,
                "libs": {
                    "path": "../amcharts/plugins/export/libs/"
                }
            }

        });
    </script>


    <?php echo $count ?>

    <div id="chartdiv" style="width: 95%; height: 400px; margin-right: 150px"></div>
    </div>

            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>
    <!-- jQuery -->
    <script src="jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap.min.js"></script>

</body>








</html>