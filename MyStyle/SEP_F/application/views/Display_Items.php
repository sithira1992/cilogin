<!DOCTYPE HTML>
<html>
<head>
    <title>My Style International</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="aasets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Sri lanka Round tours, Round tours, Round Tours, Driver Sri Lanka, Sri Lanka, whale watching mirissa,Taxi services,surfing,airport hire,Sigiriya, Nuwara Eliya, Kandy, Holiday Sri Lanka, Travel Sri Lanka, Yala Safari, Ele phants, Gihan Tours" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="assets/css/blue.css" rel="stylesheet" type="text/css" media="all" />

    <link href="<?php echo  base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo '$css' ?>" rel="stylesheet" type="text/css" />

    <!-- jQuery for ratings -->
    <script src="../assets/Ratings/js/jquery.min.js"></script>
    <!-- stylesfor ratings -->
    <link href="<?php echo  base_url('../assets/Ratings/css/style.css') ?>" rel="stylesheet" type="text/css" />
    <script src="../assets/Ratings/js/bootstrap.min.js"></script>
    <script src="../assets/Ratings/js/main.js"></script>


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

    <script src="asset/js/apis.js" async defer></script>
</head>

<body style="background-color:#EFEFEF">


</br>
</br>
<h1 align="center" family="Tahoma"><b><?php echo $title; ?></b></h1>
<div class="container">

    <div class="span_of_4"><!-- start span_of_4 -->

        <?php $count=0 ?>

        <?php foreach($details as $row) { ?>

            <?php if( $count%4 ==0 && $count>0){?>
                <div class="span_of_4">
            <?php }?>


            <div class="col-md-3 span1_of_4">

                <?php $count=$count+1 ?>

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

        <?php if( $count == 0) {?>

            <h4 align="center" family="Tahoma">No Items Avilable under this topic</h4>

        <?php }?>


    </div>
</div>
</br>
</br></br> </br>


</div>


<div class="main_btm"><!-- start main_btm -->
    <div class="container">
        <div class="main span_of_3">
            <div class="col-md-3 span1_of_3">
                <h4>Promotional Wears  </h4>
                <ul class="list-unstyled nav_list">
                    <li><a href="#">Promotional T-Shirt</a></li>
                    <li><a href="#">Sports Wear</a></li>
                    <li><a href="#">School Wear</a></li>
                    <li><a href="#">Office Wear</a></li>
                    <li><a href="#">Work Wear</a></li>
                    <li><a href="#">Hospital Wear</a></li>

                </ul>
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