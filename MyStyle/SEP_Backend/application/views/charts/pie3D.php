
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" type="text/css">


        <script src="<?php echo base_url(); ?>/assets/js/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/pie.js" type="text/javascript"></script>


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



        <body>
        <div id="chartdiv" style="width: 100%; height: 300px;"; style="margin-right:0px ""></div>
    </body>
