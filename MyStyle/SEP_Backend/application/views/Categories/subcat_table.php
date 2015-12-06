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
                        Manage Categories
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i>Sub Categories
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="form-group">
                <h3><b>Sub Categories</b></h3>
            </div>

            </br></br>
            <div class="row">

            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php if (isset($succ_message)) { ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $succ_message; ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($error_message)) { ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $error_message; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <table class="table table-bordered" width ="50">

                    <tr>
                        <td><b>Category ID</b></td>
                        <td><b>Category</b></td>
                        <td><b>Sub Category</b></td>
                        <td><b>Description</b></td>

                        <td><b>Options</b></td>

                    </tr>
                    <?php foreach($result as $row) { ?>


                        <tr>
                            <td><?php echo $row->sub_cat_id; ?></td>
                            <td><?php echo $row->cat_name; ?></td>
                            <td><?php echo $row->sub_cat_name;?></td>
                            <td><?php echo $row->sub_cat_description;?></td>


                            <td>
                                <a href=<?php echo base_url()?>Con_subcat/deletesubcat?var1=<?php echo $row->sub_cat_id ?>&var2=<?php echo $row->sub_cat_name ?>   title="Delete Subcategory"><i class="fa fa-times-circle"></i></a>


                            </td>
                        </tr>
                    <?php } ?>
                </table>

                <div class="row">
                    <h3><b>Add Sub Category</b></h3>

                    <form id="contactform" method="post" action='<?php echo base_url('Con_subcat/insert');?>'>
                        <div class="col-lg-6">

                            </br>

                            <form role="form" method="post" action="<?php echo base_url('Con_product/update');?>">

                                <div class="form-group">
                                    <label>Category name</label>

                                    <input type="text" name="subcat_name" class="form-control" required="" value="">

                                </div>

                                <div class="form-group">
                                    <label>Main Category</label>
                                    <select class="form-control" name="select">
                                        <?php foreach($maincat as $row1){?>

                                            <option ><?php echo $row1->cat_name ?></option>


                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description"  required="" rows="3" placeholder=""></textarea>
                                </div>




                                <button type="submit" class="btn btn-default" >Add Category</button>

                            </form>
                        </div>
                </div>

                <!-- /.container-fluid -->

            </div>

            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
    </div>

    <!-- jQuery -->
    <script src=<?php echo base_url('jquery.js')?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo base_url('bootstrap.min.js')?>></script>

</body>

</html>




</html>

