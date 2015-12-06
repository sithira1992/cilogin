<!DOCTYPE HTML>
<html>
<head>
    <title>My Style International</title>

    <!-- Test -->

    <link href="../assets/Ratings/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/Ratings/css/style.css" rel="stylesheet">
    <link href="<?php echo  base_url('../assets/Ratings/css/style.css') ?>" rel="stylesheet" type="text/css" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/Ratings/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/Ratings/js/bootstrap.min.js"></script>
    <script src="../assets/Ratings/js/main.js"></script>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="aasets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="assets/css/blue.css" rel="stylesheet" type="text/css" media="all" />

    <link href="<?php echo  base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo '$css' ?>" rel="stylesheet" type="text/css" />


    <link href="<?php echo  base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo '$css' ?>" rel="stylesheet" type="text/css" />


    <link href="<?php echo  base_url('assets/css/blue.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo '$css' ?>" rel="stylesheet" type="text/css" />


    <link href="<?php echo  base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo '$css' ?>" rel="stylesheet" type="text/css" />

    <!----font-Awesome----->
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css">
    <!----font-Awesome----->
    <!-- start plugins -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!--start slider -->
    <link rel="stylesheet" href="assets/css/fwslider.css" media="all">
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/css3-mediaqueries.js"></script>
    <script src="assets/js/fwslider.js"></script>
    <!--end slider -->
    <!-- must have -->
    <link href="assets/css/allinone_carousel.css" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <script src="assets/js/allinone_carousel.js" type="text/javascript"></script>
    <!--[if IE]><script src="assets/js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
    <!-- must have -->
    <script>
        jQuery(function() {

            jQuery('#allinone_carousel_charming').allinone_carousel({
                skin: 'charming',
                width: 990,
                height: 454,
                responsive:true,
                autoPlay: 3,
                resizeImages:true,
                autoHideBottomNav:false,
                showElementTitle:false,
                verticalAdjustment:50,
                showPreviewThumbs:false,
                //easing:'easeOutBounce',
                numberOfVisibleItems:5,
                nextPrevMarginTop:23,
                playMovieMarginTop:0,
                bottomNavMarginBottom:-10
            });
        });
    </script>
    <!-- Owl Carousel Assets -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({
                items : 4,
                lazyLoad : true,
                autoPlay : true,
                navigation : true,
                navigationText : ["", ""],
                rewindNav : false,
                scrollPerPage : false,
                pagination : false,
                paginationNumbers : false
            });

        });
    </script>
    <!-- //Owl Carousel Assets -->
    <!-- start circle -->
    <script>
        (function($){
            $.fn.percentPie = function(options){

                var settings = $.extend({
                    width: 100,
                    trackColor: "EEEEEE",
                    barColor: "E2534B",
                    barWeight: 30,
                    startPercent: 0,
                    endPercent: 1,
                    fps: 60
                }, options);

                this.css({
                    width: settings.width,
                    height: settings.width
                });

                var	that = this,
                    hoverPolice = false,
                    canvasWidth = settings.width,
                    canvasHeight = canvasWidth,
                    id = $('canvas').length,
                    canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
                    canvas = canvasElement.get(0).getContext("2d"),
                    centerX = canvasWidth/2,
                    centerY = canvasHeight/2,
                    radius = settings.width/2 - settings.barWeight/2;
                counterClockwise = false,
                    fps = 1000 / settings.fps,
                    update = .01;
                this.angle = settings.startPercent;

                this.drawArc = function(startAngle, percentFilled, color){
                    var drawingArc = true;
                    canvas.beginPath();
                    canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
                    canvas.strokeStyle = color;
                    canvas.lineWidth = settings.barWeight;
                    canvas.stroke();
                    drawingArc = false;
                }

                this.fillChart = function(stop){
                    var loop = setInterval(function(){
                        hoverPolice = true;
                        canvas.clearRect(0, 0, canvasWidth, canvasHeight);

                        that.drawArc(0, 360, settings.trackColor);
                        that.angle += update;
                        that.drawArc(settings.startPercent, that.angle, settings.barColor);

                        if(that.angle > stop){
                            clearInterval(loop);
                            hoverPolice = false;
                        }
                    }, fps);
                }

                this.mouseover(function(){
                    if(hoverPolice == false){
                        that.angle = settings.startPercent;
                        that.fillChart(settings.endPercent);
                    }
                });

                this.fillChart(settings.endPercent);
                this.append(canvasElement);
                return this;
            }
        }(jQuery));

        $(document).ready(function() {

            $('.google').percentPie({
                width: 100,
                trackColor: "E2534B",
                barColor: "76C7C0",
                barWeight: 20,
                endPercent: .9,
                fps: 60
            });

            $('.moz').percentPie({
                width: 100,
                trackColor: "E2534B",
                barColor: "76C7C0",
                barWeight: 20,
                endPercent: .75,
                fps: 60
            });

            $('.safari').percentPie({
                width: 100,
                trackColor: "E2534B",
                barColor: "#76C7C0",
                barWeight: 20,
                endPercent: .5,
                fps: 60
            });

        });
    </script>
    <script src="asset/js/apis.js" async defer></script>
</head>
<body>


<div id="fwslider"><!-- start slider -->
    <div class="slider_container">

        <?php foreach($images as $row) {?>


            <div class="slide">
                <!-- Slide image -->
                <img src="<?php echo $row->path ?>" alt="mystyle">
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title"><?php echo $row->mtitle; ?> </h4>
                        <!-- /Text title -->
                        <!-- Text description -->
                        <p class="description"><?php echo $row->stitle; ?> </p>
                        <!-- /Text description -->
                    </div>
                </div>
                <!-- /Texts container -->
            </div>

        <?php } ?>
        <!--/slide -->
    </div>
    <div class="timers"></div>
    <div class="slidePrev"><span></span></div>
    <div class="slideNext"><span></span></div>
</div><!--/slider -->
<div class="main_bg"><!-- start main -->

    </br>
    </br>

    <h1 align="center" family="Tahoma"><b>Our Latest Products</b></h1>


    <div id="container1" name="container1" class="container">

        <div class="span_of_4"><!-- start span_of_4 -->

            <?php $count =0?>

            <?php foreach($details as $row) { ?>

                <?php if( $count%4 ==0 && $count>0){?>
                    <div class="span_of_4">
                <?php }?>

                <?php $count=$count+1 ?>


                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="items"><img src="<?php echo $row->path ?>"></i></span>
                        <h3><?php echo $row->topic ?></h3>


                        <div class="article row" article-id="<?php echo $row->item_id ?>">
                            <div class="rating col-md-5" ><font size="2" color="red"> Ratings</font></div>
                            <div id="rate" name="rate" class="rating col-md-13 <?php echo $row->ratings ?>"><?php echo $row->ratings ?></div>
                        </div>
                        <div class="read_more">
                            <a class="btn btn-2 active" href="con_details?var1=<?php echo $row->topic?>">view more</a>
                        </div>
                    </div>
                </div>

                <?php if( $count%4==0){?>
                    <div class="clearfix"></div>
                    </div>
                <?php }?>


            <?php } ?>


            <!-- end span_of_4 -->
        </div>
    </div>



    </br>
    </br>
</div>

        <div class="col-md-6 span1_of_3">
            <h4>My Style International</h4>
            <h5>  My Style was started  in 2002.Initially we forcus on apparel sector.We being offering apparel serice to all leading apparel vendors in Sri Lanka.
                We have been giving our service to all leading fashion buyers all around the world.We got many internationl experienced while hanling leading
                all these buyers.
                With global resesion in 2008 , we thought of moving in to fashion industry , And now we in to Promotional & Advertising business as well. </h5>
            <!-- start circle -->

            <!-- end circle -->
        </div>
        <div class="col-md-3 span1_of_3">
            <h4>Our Vision & Mission</h4>
            <div class="clients">
                <p>With all the experience we earn from our past tours, we're trying to become a perfect tour facilitator & operator service in Sri Lanka. Our aim is to be welcoming, flexible and friendly as your driver and travel partner in Sri Lanka.
                    My name is Gihan and I am the owner of GTSL tours (Gihan Tours Sri Lanka).</br> I am handling this web site with my team, always trying to provide the very best, unique and transparent service as your sight seeing driver. We are travelling specialists all over Sri Lanka and we'd be happy to welcome you and show you around.</p>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
    <div class="cau_hide">
        <div class="cursual"><!--  start cursual  -->
            <h4>our next Events<span class="line"></span></h4>
        </div>
        <div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="assets/images/logo.png" alt="sri_lanka_round_tour_driver">
                </div>
            </div>
        </div>
        <div id="TA_cdsscrollingravewide565" class="TA_cdsscrollingravewide" style="float:right; margin-right:125px;">
            <ul id="MrOZjkYehk" class="TA_links LKFBhlDy3i">
                <li id="cyp5YuK" class="452AYh7vP">
                    <a target="_blank" href="http://www.tripadvisor.de/"><img src="http://c1.tacdn.com/img2/t4b/Stacked_TA_logo.png" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a>
                </li>
            </ul>
        </div>
        <script src="http://www.jscache.com/wejs?wtype=cdsscrollingravewide&amp;uniq=565&amp;locationId=7180832&amp;lang=de&amp;border=true&amp;shadow=true&amp;backgroundColor=gray&amp;display_version=2"></script>
        <!----//End-img-cursual---->
    </div>
</div>
</div>



</body>
</html>