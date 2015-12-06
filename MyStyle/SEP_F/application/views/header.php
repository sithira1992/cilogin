
<link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Sri lanka Round tours, Round tours, Round Tours, Driver Sri Lanka, Sri Lanka, whale watching mirissa,Taxi services,surfing,airport hire,Sigiriya, Nuwara Eliya, Kandy, Holiday Sri Lanka, Travel Sri Lanka, Yala Safari, Ele phants, Gihan Tours" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="assets/css/blue.css" rel="stylesheet" type="text/css" media="all" />

<link href="<?php echo  base_url('../assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
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
<script type="text/javascript" src="<?php echo base_url('assets/fabric.js')?>"></script>
<!--start csr-slider -->


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
                <a href="index.html"><img src="assets/images/logo1.png"  alt="My Style International"/></a>
            </div>
            <div class="h_menu">
                <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
                <nav>
                    <ul class="menu list-unstyled">
                        <li class="activate"><a href="Con_index">HOME</a></li>

                        <li><a href="">Services</a>

                        </li>
                        <li><a href="Con_about">About Us</a></li>
                        <li><a href="Con_vacancies">Career</a></li>
                        <li><a href="con_csrproject">CSR Projects</a></li>
                        <li><a href="customize_design_con">Online Design</a></li>
                        <li><a href="Con_Contact_us">Contact Us</a></li>


                        <li><a href="lol"></a></li>
                        <li>    <?php if(!empty($user_name)){
                                echo "<h3 class='Headers' id='name'>Welcome  ".$user_name."</h3>";
                                echo "<form method='post' action='".base_url('login_controller/logOut')."'>";
                                echo "<button type='submit' class='button-lengthy button2-style' id='logout'>Logout</button>";
                                echo "</form>";
                            }
                            else{?>
                        <li><a href="con_signup">SIGNIN</a></li>";
                        <?php }

                        ?></li>
                    </ul>
                </nav>
                <script src="assets/js/menu.js" type="text/javascript"></script>
            </div>
        </div>
    </div>

    <!-- search bar!-->



            <!--New !-->

            <div class="h_menu1" align="center">
                <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
                <nav>
                    <ul class="menu list-unstyled">



                        <?php foreach($maincat as $row) { ?>
                        <li><a href=""><?php echo $row->cat_name?></a>

                            <ul class="sub-menu list-unstyled">

                                <?php foreach($subcat as $row1) {?>

<!-- Try to Find way to use if statement in here" !-->
                                            <?php if( $row->cat_name == $row1->cat_name) {?>
                                         <li><a href="Data_Controller?var1=<?php echo $row1->sub_cat_name?>"><?php echo $row1->sub_cat_name ?></a></li>
                                        <?php }?>
                                <?php }?>

                            </ul>

                                <?php } ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <script src="assets/js/menu.js" type="text/javascript"></script>
            </div>



        <!-- end !-->
        <div class="clearfix"></div>

</div>
</div>



<!-- newly added sithira start --><!-- newly added sithira start --><!-- newly added sithira start --><!-- newly added sithira start -->


<script src="<?php echo base_url(); ?>/assets/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/chat.js" type="text/javascript"></script>
<!-- drag the chat box  f
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
<script type="text/javascript" src="http://demo.webexplorar.com/codeigniter/application/js/jquery/ui/jquery.ui.draggable.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/> -->


<link type="text/css" rel="stylesheet" media="all" href="http://demo.webexplorar.com/codeigniter/application/css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="http://demo.webexplorar.com/codeigniter/application/css/screen.css" />


<div id="chat" class="chat" style="display:block;width:150px;height:200px;overflow:hidden;position:fixed;
    top:500px;right:0px;z-index:20000;">
    <?php $this->load->view('chat/header'); ?>

    <a href="javascript:void(0)"  onClick=" hide('chat');javascript:chatWith('Admin')">

        <img alt="Live Chat Software" src="<?php  echo base_url(); ?>/assets/images/chat.png" border="0"  style="visibility:visible">

    </a></div>



<form id="customForm"  method="post" action='<?php echo base_url('users/index');?>'>
    <p>
        <input type="text" name="username" value="a" id="UN" style="visibility: hidden "/>
    </p>

    <p>
        <input type="password" name="pwd" value="a" id="PW" style="visibility: hidden"/>
    </p>


</form>

<script type="text/javascript">

</script>

<script>
    function show(target) {
        document.getElementById(target).style.display = 'block';
    }

    function hide(target) {
        document.getElementById(target).style.display = 'none';

        <?php
         session_start();

            if(!empty($user_name)){


           //     echo "test1";
                $_SESSION['username'] = $user_name;


        }
        elseif(!empty($_SESSION['username'])){
           //     echo "test2";
        }
        else{
             //       echo "test3";
                  $_SESSION['username']="Guest0".rand(0,5);
     }


?>

    }
</script>

</div>

<!-- newly added sithira end--> <!-- newly added sithira end--> <!-- newly added sithira end--> <!-- newly added sithira end-->




<div align="Right">
    <form class="form-inline" method="post" action=<?php echo base_url('Con_search')?>>

        <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" id="search" name="search" placeholder="Search Products">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
</div>



