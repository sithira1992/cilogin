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
    <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
</head>

<body>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Image Slides
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Manage Slideshow
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="form-group">
                <h3><b>Home Page Image SlideShow</b></h3>
            </div>

            </br></br>

            <div class="row">

               <!-- /.row -->
            </div>
        </div>
        </br>

        <table class="table table-bordered" width ="50">

            <tr>
                <td><b>Image ID</b></td>
                <td><b>Image</b></td>
                <td><b>Main Title</b></td>
                <td><b>Sub Title</b></td>
                <td><b>Options</b></td>

            </tr>
            <?php foreach($data as $row) { ?>


                <tr>
                    <td><?php echo $row->image_id; ?></td>
                    <td><img src="<?php echo $row->path; ?>" height="160" width="400"></td>
                    <td><?php echo $row->mtitle; ?></td>
                    <td><?php echo $row->stitle;?></td>

                    <td><a href=<?php echo base_url()?>Con_slideimg/?var1=<?php echo $row->image_id?> >Update</a> </td>

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
<script src=<?php echo base_url('jquery.js')?>></script>

<!-- Bootstrap Core JavaScript -->
<script src=<?php echo base_url('bootstrap.min.js')?>></script>

</body>
</html>






