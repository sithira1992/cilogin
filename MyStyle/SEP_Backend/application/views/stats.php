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
                            <i class="fa fa-edit"></i> Forms
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

                <div class="col-lg-6">





                </div>

                <!-- /.row -->

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

                    <table class="table table-bordered table-hover table-striped" width="100%" cellspacing="1" cellpadding="10" style="margin-right:0px ">

                        <tr>
                            <th>Id</th>
                            <th>IP</th>
                            <th>User agent</th>
                            <th>Country</th>
                            <th>City</th>

                            <th>Is a bot?</th>
                            <th>Page</th>
                        </tr>
                        <?php
                        // get the list of visitors

                        //$query = "select * from tracker";
                        //$result = mysql_query($query);
                        $count=1;
                        $a=0;

                        foreach($result as $row)
                        {

                            ?>
                            <tr>
                                <td><?php echo $count++ ?></td>
                                <td><?php echo $row->ip?></td>
                                <td><?php echo $row->http_user_agent;?></td>
                                <td><?php echo $row->country?></td>
                                <td><?php echo $row->city;?></td>
                                <td><?php echo $row->date;?></td>

                                    <?php
                                    $d=$row->date;
                                    $d1=date("Y-m-d");
                                            if(($d==$d1) )
                                            {
                                                $a++;
                                            }
                                    ?>

                                <td><?php if ($row->isbot==1) echo "yes"; else echo "no";?></td>
                                <td><?php echo $row->request_uri?></td>
                            </tr>
                        <?php
                        }?>


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

            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>
    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>








