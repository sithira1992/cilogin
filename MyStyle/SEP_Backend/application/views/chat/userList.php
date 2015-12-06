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
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

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
<?php
	session_start();
	$_SESSION['username'] = $this->session->userdata('username'); // Must be already set
?>
<?php $this->load->view('chat/header'); ?>

<?php
	//Show Flash Message
	if($msg = $this->session->flashdata('flash_message'))
	{
		echo $msg;	
	}
	
?>

<h2>Online Users</h2>

<?php
if($_SESSION['username']=='') { ?>
	<h3>Please login to chat</h3>
	<a href="http://localhost/CodeIgniter/index.php/users">Login</a><br/>
<?php
} else {  echo 'Hi '.$_SESSION['username'];
?> 
<br />

	<a href="http://localhost/CodeIgniter/index.php/users/logout">Logout</a><br/>
<?php
}
?>
        <table class="table table-bordered" width ="50">
        <table width="45%" cellspacing="1" cellpadding="2" class="tableContent" style="margin-left:0px !important;">
                        <tbody>
                                  <tr style="background-color:#9EB0E9;  font-size:13px; font-weight:bold; color:#fff;">
                                  <th>Online</th>
                                  <th>User Id</th>
                                  <th>User Name</th>
                                </tr>
                              
								<?php
								
								// print_r($listOfUsers); 
								
								 if(isset($listOfUsers))
							    {
							   
							    foreach($listOfUsers->result() as $res)
								 {

							    ?>

                                    <tr style="background-color:#efefef;">

                                            <td><?php if($res->online==1) echo 'Active'; else echo 'Inactive'; ?></td>
                                            <td><?php echo $res->user_id; ?></td>
                                            
                                            <td>
                                            <?php if($_SESSION['username']==$res->user_name) { ?>
                                            		<a href="#" style="text-decoration:none">
                                                  <?php } else { ?>
                                                		<a href="javascript:void(0)" onClick="javascript:chatWith('<?php echo $res->user_name; ?>');">
                                                  <?php } ?>      
                                                            <?php echo $res->user_name;  ?>
                                                </a>
                                            </td>
                                    </tr>

										 <?php 	
										 
									  }
								  }
							  ?>	  	  	
			
					</tbody>
			   </table>
            </table>
<?php // $this->load->view('footer'); ?>
        </div>
    </div>
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

