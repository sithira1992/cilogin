
<link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Sri lanka Round tours, Round tours, Round Tours, Driver Sri Lanka, Sri Lanka, whale watching mirissa,Taxi services,surfing,airport hire,Sigiriya, Nuwara Eliya, Kandy, Holiday Sri Lanka, Travel Sri Lanka, Yala Safari, Ele phants, Gihan Tours" />
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
<link href="<?php echo  base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo '$css' ?>" rel="stylesheet" type="text/css" />


<link href="<?php echo  base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo '$css' ?>" rel="stylesheet" type="text/css" />


<link href="<?php echo  base_url('assets/css/blue.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo '$css' ?>" rel="stylesheet" type="text/css" />


<link href="<?php echo  base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo '$css' ?>" rel="stylesheet" type="text/css" />

<div class="header_bg">
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo.png" alt=""/></a>
            </div>
            <div class="h_menu">
                <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
                <nav>
                    <ul class="menu list-unstyled">
                        <li class="activate"><a href="Con_index">HOME</a></li>

                        <li><a href="">Services</a>
                            <ul class="sub-menu list-unstyled">
                                <li><a href="Data_Controller">Promotional</a></li>

                                <li><a href="8_day_ tour.html">Advertising</a></li>
                                <li><a href="5_day_ tour.html">Souveniers</a>
                                <li><a href="4_day_ tour.html">Hotel Projects</a>
                                <li><a href="3_day_ tour.html">Online Store</a>
                                <li><a href="3_day_ tour.html">Sewing Studies</a>

                                    <!--<ul class="list-unstyled">
                                        <li><a href="">Office Bearers</a></li>
                                        <li><a href="">Council Members</a></li>
                                        <li><a href="">Management Committees</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </li>
                        <li><a href="Con_about">About Us</a></li>

                        <li><a href="con_csrproject">CSR Projects</a></li>
                        <li><a href="reviews.php">Reviews</a></li>
                        <li><a href="Con_contactus">Contact Us</a></li>



                        <!--newly added sithira-->     <!--newly added sithira-->     <!--newly added sithira-->
                        <?php if(!empty($user_name)){?>

                        <li><a href="Con_register_update">welcome   <?php echo $user_name; ?></a>
                        <?php
                        echo "<form method='post' action='".base_url('login_controller/logOut')."'>";

                         echo "<button type='submit' class='btn btn-primary btn-xs' id='logout'>Logout</button>";
                         echo "</form>";
                        ?>

                            </li>
                       </form>





                        <?php }


                        else {?>
                            <li><a href="con_signup">SIGNIN</a></li>";
                        <?php }
                        ?>

                        <!--newly added sithira-->     <!--newly added sithira-->     <!--newly added sithira-->     <!--newly added sithira-->
                        <!---
                        <li>  <?php if(!empty($user_name)){?>


                              <a href ="Con_register_update">Welcome  ".<?php echo $user_name; ?>

                        echo "<form method='post' action='".base_url('login_controller/logOut')."'>";

                         echo "<button type='submit' class='button-lengthy button2-style' id='logout'>Logout</button>";
                         echo "</form>";


                            <?php
                            }
                            else{?>
                                <li><a href="con_signup">SIGNIN</a></li>";
                            <?php }
                            ?></li>

                            -->
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>


</div>
