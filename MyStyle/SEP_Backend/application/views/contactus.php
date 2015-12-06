
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




    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Manage Contact Details
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i>Contact Us
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <form id="contact"  method="post" action='<?php echo base_url('Con_contact_us/insert_contact');?>'>
                    <div class="row">

                    <div class="col-lg-6">



                        <div class="form-group">
                            <label>Address</label>
                            <?php foreach($details as $row) {?>

                            <textarea class="form-control"name="address" rows="5" placeholder="<?php echo $row->Address ?>"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Telephone</label>
                            <textarea class="form-control"name="tel" id="tel" rows="5" placeholder="<?php echo $row->Telephone ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hot Line</label>

                            <textarea class="form-control"name="Hot_line" rows="5" placeholder="<?php echo $row->Hotline ?>"></textarea>
                        </div>

                        <?php } ?>
                        <button type="submit" class="btn btn-default" >Submit Button</button>
            </form>

        </div>

        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
