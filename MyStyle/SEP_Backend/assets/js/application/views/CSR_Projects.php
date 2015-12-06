<!DOCTYPE HTML>
<html>
<head>
    <title>CSR Projects</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
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
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
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
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>




<!-- start banner -->
<div id="bannerBg">
    <div id="containingDiv">
        <div id="allinone_carousel_charming">
            <div class="myloader"></div>
            <!-- CONTENT -->
            <ul class="allinone_carousel_list">

                <li><img src="assets/images/10333676_10203780443855622_8831225753332805693_o.jpg"  class="img-responsive"/></li>
                <li><img src="assets/images/DSCN2575.JPG"  class="img-responsive"/></li>
                <li><img src="assets/images/blood-Donation-2.jpg"  class="img-responsive"/></li>
                <li><img src="assets/images/buddhist-pilgrims-19.jpg" class="img-responsive"/></li>
                <li><img src="assets/images/Batticaloa_Blood_Donor_03.jpg" class="img-responsive"/></li>
                <li><img src="assets/images/growing-ecosystems-srilanka.jpg"  class="img-responsive"/></li>
                <li><img src="assets/images/10275291_672079056173959_340836465857255347_o.jpg"  class="img-responsive"/></li>
                <li><img src="assets/images/maxresdefault.jpg"class="img-responsive"/></li>


            </ul>
        </div>
    </div>
</div>
<!-- end banner -->
</div>


<li id="cyp5YuK" class="452AYh7vP">
</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=cdsscrollingravewide&amp;uniq=565&amp;locationId=7180832&amp;lang=de&amp;border=true&amp;shadow=true&amp;backgroundColor=gray&amp;display_version=2"></script>
<!----//End-img-cursual---->
</div>
</div>
</div>


</html>