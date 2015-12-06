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
                        Rating Details
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Ratings
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="form-group">
                <h3><b>Customer Feedback</b></h3>
            </div>
            </br></br>

            <div class="row">

            </div>

'                <div align="Right">
                    <form class="form-inline" method="post" action=<?php echo base_url('Con_ratings/search')?>>
                         <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword3">Password</label>
                            <input type="search" class="form-control" id="search" name="search" placeholder="Product Name">

                             <select class="form-control" name="select">
                                <option >Select Category</option>
                                <?php foreach($content as $row2){?>
                                    <option ><?php echo $row2->cat_name ?></option>
                                <?php } ?>
                            </select>

                            <button type="submit" class="btn btn-default">Search</button>
                         </div>
                    </form>

                 </div>
                </br>

                <table class="table table-bordered" width ="50">

                    <tr>
                        <td><b>Item id</b></td>
                        <td><b>Name</b></td>
                        <td><img src="<?php echo base_url('assets/stars/1star.JPG')?>" align="left"></td>
                        <td><img src="<?php echo base_url('assets/stars/2star.JPG')?>" align="left"></td>
                        <td><img src="<?php echo base_url('assets/stars/3star.JPG')?>" align="left"></td>
                        <td><img src="<?php echo base_url('assets/stars/4star.JPG')?>" align="left"></td>
                        <td><img src="<?php echo base_url('assets/stars/5star.JPG')?>" align="left"></td>
                        <td>Overall rating</td>


                    </tr>
                    <?php foreach($details as $row) { ?>


                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->count1; ?></td>
                            <td><?php echo $row->count2;?></td>
                            <td><?php echo $row->count3;?></td>
                            <td><?php echo $row->count4;?></td>
                            <td><?php echo $row->count5;?></td>
                            <td>   <div class="rating col-md-5" ><font size="2" color="red"> Ratings</font></div>
                                <div id="rate" name="rate" class="rating col-md-13 <?php echo $row->avg ?>"><?php echo $row->avg ?></div>
                            </div></td>


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

