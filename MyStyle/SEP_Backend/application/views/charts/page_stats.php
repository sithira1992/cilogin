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
<body>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Customer Statistic
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="../index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i>Statistics
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="form-group">
                <h3><b>User Stats </b></h3>

           </div>

            </br></br>



            <div class="row">



            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php if (isset($succ_message)) { ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $succ_message; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>


                        <?php


                        $count=1;
                        $today=0;
                        $yesterday=0;
                        $thisMonth=0;
                        $fullCount=0;
                        $unique=0;
                        foreach($result as $row)
                        {

                                    $today=$row->total;

                        }

                          foreach($result1 as $row)
                      {

                          $yesterday=$row->total;

                         }


                        foreach($result2 as $row)
                        {

                            $thisMonth=$row->total;

                        }
                        foreach($result3 as $row)
                        {

                            $fullCount=$row->total;

                        }

                        foreach($result4 as $row)
                        {

                            $unique=$row->total;

                        }
                        ?>






                <table class="table table-striped"  align="right"  width="20%" style="margin-top: -80px ;margin-right: 10px;padding: 5px">
                    <tr>
                        <th>Entry</th>
                        <th>page View</th>

                    </tr>
                    <tr>

                    </tr>

                        <tr>
                            <td> Pageviews today</td>
                            <td><?php echo $today ?></td>

                        </tr>
                    <tr>
                        <td> Pageviews yesterday</td>
                        <td><?php echo $yesterday ?></td>
                        </tr>
                   <tr>
                        <td> Pageviews this month</td>
                        <td><?php echo $thisMonth ?></td>

                    </tr>

                    <tr>
                        <td> Pageviews all time history</td>
                        <td><?php echo $fullCount ?></td>

                    </tr>

                    <tr>
                        <td> Unique visitors all time history</td>
                        <td><?php echo $unique ?></td>

                    </tr>


                </table>
                <div class="row">



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

                            <?php foreach($result5 as $row) {$count++;?>

                            {
                                "country":  " <?php echo $row->request_uri ?>",
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




                    <div id="chartdiv" style="width: 90%; height: 400px; margin-right: 150px"></div>
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








