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

    <link href="<?php echo  base_url('assets/Ratings/css/style.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url('assets/Ratings/js/jquery.min.js')?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/Ratings/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/Ratings/js/main.js')?>"></script>

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

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
                        Manage Requests
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="../index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Forms
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="form-group">
                <h3><b>Manage Requests</b></h3>





            </div>

            </br></br>



            <div class="row">

                <div class="col-lg-6">





                </div>

                <!-- /.row -->

            </div>




        </div>
        </br>

        <table class="table table-bordered" width ="50">

            <tr>
                <td><b>Name</b></td>
                <td><b>Contact No</b></td>
                <td><b>E-Mail</b></td>
                <td><b>Product</b></td>
                <td><b>Service Category</b></td>
                <td><b>Subject</b></td>
                <td><b>Description</b></td>
                <td><b>Received Date</b></td>

            </tr>
            <?php foreach($data as $row) { ?>


                <tr>
                    <td><?php echo $row->Name; ?></td>
                    <td><?php echo $row->Phone;?></td>
                    <td><?php echo $row->Email; ?></td>
                    <td><?php echo $row->product; ?></td>
                    <td><?php echo $row->category; ?></td>
                    <td><?php echo $row->subject; ?></td>
                    <td><?php echo $row->description;?></td>
                    <td><?php echo $row->Received_Date;?></td>



                </tr>
            <?php } ?>
        </table>


    </div>

    <!-- /.container-fluid -->

</div>

<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<!-- jQuery -->
<script src=<?php echo base_url('../assets/js/jquery.js')?>></script>

<!-- Bootstrap Core JavaScript -->
<script src=<?php echo base_url('../assets/js/bootstrap.min.js')?>></script>

</body>
</html>






