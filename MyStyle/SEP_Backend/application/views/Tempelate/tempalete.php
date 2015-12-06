


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

    <link id="bootstrap-style" href="<?php echo base_url('assets/Template/css/bootstrap.min.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/Template/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
    <link id="base-style" href="<?php echo base_url('assets/Template/css/style.css')?>" rel="stylesheet">
    <link id="base-style-responsive" href="<?php echo base_url('assets/Template/css/style-responsive.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">


    <link href="<?php echo  base_url('assets/Ratings/css/style.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url('assets/Ratings/js/jquery.min.js')?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/Ratings/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/Ratings/js/main.js')?>"></script>

    <!-- Custom CSS -->


    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


   <!-- Navigation -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>Metro</span></a>

                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white warning-sign"></i>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">1 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">7 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">8 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">16 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>
                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have 9 messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="<?php echo base_url('assets/Template/img/avatar.jpg')?>" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="<?php echo base_url('assets/Template/img/avatar.jpg')?>" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="<?php echo base_url('assets/Template/img/avatar.jpg')?>" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="<?php echo base_url('assets/Template/img/avatar.jpg')?>" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="<?php echo base_url('assets/Template/img/avatar.jpg')?>" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('login_controller')?>">
                                <i class="halflings-icon white user"></i> <?php echo $user_name ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="login_controller"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->
            </div>
            </div>


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                <li><a href="<?php echo base_url('Con_home')?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                <li><a href="<?php echo base_url('Con_MailReceived')?>"><i class="icon-envelope"></i><span class="hidden-tablet"> Manage Received E-Mails</span></a></li>
                <li><a href="<?php echo base_url('Con_about_us')?>"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage About us</span></a></li>
                <li><a href="<?php echo base_url('Con_contact_us')?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> Manage Contact us</span></a></li>
                <li><a href="<?php echo base_url('con_ratings')?>"><i class="icon-dashboard"></i>Ratings</span></a></li>
                <li>
                    <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">  Manage Categories</span><span class="label label-important"> 3 </span></a>
                    <ul>
                        <li><a class="submenu" href="<?php echo base_url('con_category')?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Main Categories</span></a></li>

                        <li><a class="submenu" href="<?php echo base_url('Con_subcat')?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Categories</span></a></li>

                        <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">  Manage Products </span><span class="label label-important"> 3 </span></a>
                    <ul>
                        <li><a class="submenu" href="<?php echo base_url('Con_product')?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Products</span></a></li>

                    </ul>               <li><a class="submenu" href="<?php echo base_url('Con_subcat')?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Categories</span></a></li>
                <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
                </li>
                <li><a href="<?php echo base_url('Con_customers')?>"><i class="icon-edit"></i><span class="hidden-tablet">Customer Details</span></a></li>
                <li><a href="<?php echo base_url('Con_MailReceived')?>"><i class="icon-list-alt"></i><span class="hidden-tablet">Manage Received E-Mails</span></a></li>
                <li><a href="<?php echo base_url('Con_slides')?>"><i class="icon-font"></i><span class="hidden-tablet"> Manage slide Show</span></a></li>
                <li><a href="<?php echo base_url('Con_sewing_studies')?>"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                <li>
                    <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">  Statistic Reports</span><span class="label label-important"> 3 </span></a>
                    <ul>
                        <li><a class="submenu" href="<?php echo base_url('Con_stats')?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Customer Statistic</span></a></li>
                        <li><a class="submenu" href="<?php echo base_url('Con_statsPage')?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Viwers Statistic</span></a></li>
                        <li><a class="submenu" href="<?php echo base_url('Con_charts')?>"><i class="icon-file-alt"></i><span class="hidden-tablet">Browser Statistic</span></a></li>
                    </ul>
                </li>

                <li><a href="<?php echo base_url('design_material_con')?>"><i class="icon-calendar"></i><span class="hidden-tablet"> Manage Designs</span></a></li>
                <li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                <li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
           </ul>
      </nav>
     </div>
 </div>
<div id="wrapper">

<!-- --------------------------- -->

            <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

            <link href="<?php echo  base_url('assets/Ratings/css/style.css') ?>" rel="stylesheet" type="text/css" />
            <script src="<?php echo base_url('assets/Ratings/js/jquery.min.js')?>"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="<?php echo base_url('assets/Ratings/js/bootstrap.min.js')?>"></script>
            <script src="<?php echo base_url('assets/Ratings/js/main.js')?>"></script>

            <!-- Custom CSS -->


            <!--[if IE 9]>
            <link id="ie9style" href="<?php echo base_url('assets/Template/css/ie9.css')?>" rel="stylesheet">
            <![endif]-->

            <!-- start: Favicon -->
            <link rel="shortcut icon" href="<?php echo base_url('assets/Template/img/favicon.ico')?>">

            <!-- start: JavaScript-->

            <script src="<?php echo base_url('assets/Template/js/jquery-1.9.1.min.js')?>"></script>
            <script src="<?php echo base_url('assets/Template/js/jquery-migrate-1.0.0.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery-ui-1.10.0.custom.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.ui.touch-punch.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/modernizr.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/bootstrap.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.cookie.js')?>"></script>

            <script src='<?php echo base_url('assets/Template/js/fullcalendar.min.js')?>'></script>

            <script src='<?php echo base_url('assets/Template/js/jquery.dataTables.min.js')?>'></script>

            <script src="<?php echo base_url('assets/Template/js/excanvas.js')?>"></script>
            <script src="<?php echo base_url('assets/Template/js/jquery.flot.js')?>"></script>
            <script src="<?php echo base_url('assets/Template/js/jquery.flot.pie.js')?>"></script>
            <script src="<?php echo base_url('assets/Template/js/jquery.flot.stack.js')?>"></script>
            <script src="<?php echo base_url('assets/Template/js/jquery.flot.resize.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.chosen.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.uniform.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.cleditor.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.noty.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.elfinder.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.raty.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.iphone.toggle.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.uploadify-3.1.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.gritter.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.imagesloaded.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.masonry.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.knob.modified.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/jquery.sparkline.min.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/counter.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/retina.js')?>"></script>

            <script src="<?php echo base_url('assets/Template/js/custom.js')?>"></script>

