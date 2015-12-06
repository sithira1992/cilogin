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
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Manage Slide Show
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i>Manage Slideshow
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="form-group">
                <h3>Edit Slide Show details</h3>
            </div>




            <div class="row">

                <div class="col-lg-6">
                    <?php foreach($data as $row) {?>

                    <form method="post" action=<?php echo base_url()?>Con_slideimg/insertimg/?var1=<?php echo $row->image_id ?>>

                        <div class="form-group">
                            <label>Slide image</label>
                            <input type="file" name="upload-img"  size="60" />
                        </div>

                        <div class="form-group">
                            <label>Main Title</label>
                            <textarea class="form-control" name="maintitle"  rows="3" placeholder="<?php echo $row->mtitle;?>"></textarea>

                        </div>


                        <div class="form-group">
                            <label>Sub Title</label>
                            <textarea class="form-control" name="subtitle"  rows="3" placeholder="<?php echo $row->stitle;?>"></textarea>
                        </div>


                        </br>

                        <?php }?>

                        <button type="submit" class="btn btn-default" >Update</button>

                    </form>
                </div>
                </br></br>



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

