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
                        Manage Products
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
                <h3><b>Product List</b></h3>





            </div>

            </br></br>



            <div class="row">

                <div class="col-lg-6">





                </div>

                <!-- /.row -->

            </div>

            <div align="Right">
                <form class="form-inline" method="post" action=<?php echo base_url('proedit_con/search')?>>

                    <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword3">Password</label>
                        <input type="search" class="form-control" id="search" name="search" placeholder="Product Name">
                        <select class="form-control" name="select">
                            <option >Select Category</option>
                            <?php foreach($content as $row2){?>

                                <option ><?php echo $row2->cat_name ?></option>


                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            </div>
            </br>

            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php if (isset($succ_message)) { ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $succ_message; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <table class="table table-bordered" width ="50">

                    <tr>
                        <td><b>Product Name</b></td>

                        <td><b>Type</b></td>
                        <td><b>Image</b></td>
                        <td><b>Options</b></td>

                    </tr>
                    <?php foreach($result as $row) { ?>


                        <tr>
                            <td><?php echo $row->topic; ?></td>

                            <td><?php echo $row->type;?></td>
                            <td><img src="/MyStyle/SEP_F/<?php echo $row->path?>"> </td>

                            <td>
                                <a class="delete" onclick="javascript:deleteConfirm('<?php echo base_url(). "proedit_con/delete?var1=" . $row->item_id."&var2=".$row->topic;?>');" deleteConfirm href="#"><i class="fa fa-times-circle"></i></a>
                                <script type="text/javascript">
                                    function deleteConfirm(url)
                                    {
                                        if(confirm('Do you want to Delete this record ?'))
                                        {
                                            window.location.href=url;
                                        }
                                    }
                                </script>
                                <a href="<?php echo base_url() . "proedit_con/edit/" . $row->item_id;  ?>" title="Edit Details"><i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url().   "Con_comment/getcomments?var1=".$row->topic?>" title="View Comments"><i class="fa fa-comment"></i></a>
                            </td>


                        </tr>
                    <?php } ?>
                </table>

                <div class="row">

                    <!-- /.container-fluid -->

                </div>

                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->
        </div>

        <!-- jQuery -->

        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>


