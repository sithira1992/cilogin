
        <script src="<?php echo base_url(); ?>/assets/js/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/serial.js" type="text/javascript"></script>


        <!-- scripts for exporting chart as an image -->
        <!-- Exporting to image works on all modern browsers except IE9 (IE10 works fine) -->
        <!-- Note, the exporting will work only if you view the file from web server -->
        <!--[if (!IE) | (gte IE 10)]> -->

        <script src="<?php echo base_url(); ?>/assets/js/export.js" type="text/javascript"></script>


        <link href="<?php echo  base_url('/assets/css/export.css') ?>" rel="stylesheet" type="text/css" />
        <!-- <![endif]-->

        <script type="text/javascript">
            var chart;

            var chartData = [{
                "country": "USA",
                    "visits": 4025,
                    "color": "#FF0F00"
            }, {
                "country": "China",
                    "visits": 1882,
                    "color": "#FF6600"
            }, {
                "country": "Japan",
                    "visits": 1809,
                    "color": "#FF9E01"
            }, {
                "country": "Germany",
                    "visits": 1322,
                    "color": "#FCD202"
            }, {
                "country": "UK",
                    "visits": 1122,
                    "color": "#F8FF01"
            }, {
                "country": "France",
                    "visits": 1114,
                    "color": "#B0DE09"
            }, {
                "country": "India",
                    "visits": 984,
                    "color": "#04D215"
            }, {
                "country": "Spain",
                    "visits": 711,
                    "color": "#0D8ECF"
            }, {
                "country": "Netherlands",
                    "visits": 665,
                    "color": "#0D52D1"
            }, {
                "country": "Russia",
                    "visits": 580,
                    "color": "#2A0CD0"
            }, {
                "country": "South Korea",
                    "visits": 443,
                    "color": "#8A0CCF"
            }, {
                "country": "Canada",
                    "visits": 441,
                    "color": "#CD0D74"
            }, {
                "country": "Brazil",
                    "visits": 395,
                    "color": "#754DEB"
            }, {
                "country": "Italy",
                    "visits": 386,
                    "color": "#DDDDDD"
            }, {
                "country": "Australia",
                    "visits": 384,
                    "color": "#999999"
            }, {
                "country": "Taiwan",
                    "visits": 338,
                    "color": "#333333"
            }, {
                "country": "Poland",
                    "visits": 328,
                    "color": "#000000"
            }];


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




        <div id="chartdiv" style="width: 50%; height: 400px; margin-right: 150px"></div>

</div>
