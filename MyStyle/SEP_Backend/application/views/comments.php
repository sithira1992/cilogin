
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
                        Manage User Comments
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
                <h3><b>User Comments</b></h3>





            </div>

            <div class="row">

                <div class="col-lg-6">





                </div>

                <!-- /.row -->

            </div>



       </div>
        <div align="Right">
            <form class="form-inline" method="post" action=<?php echo base_url('proedit_con')?>>
                                <button type="submit" class="btn btn-default">Back To Manage Products</button>
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
                <td><b>Name</b></td>
                <td><b>Email</b></td>
                <td>Comment</td>
                <td>Option</td>


            </tr>

            <?php $count=0 ?>
            <?php foreach($comments as $row) { ?>



            <tr>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->comment; ?></td>
                <td> <a href="<?php echo base_url() . "Con_comment/deletecomment?id=" . $row->id."&name=".$row->topic;  ?>" title="Delete Comment"><i class="fa fa-times-circle"></i></a></td>

                <?php $count =$count+1?>

            </tr>
            <?php } ?>
            </table>

            <h3>Add Comment</h3>

            <div class="row">
                <div class="col-lg-6">

                    <?php if($count>0){?>
                    <form id="form" class="form-controll" method="post" action=<?php echo base_url()?>Con_comment/addcomment?id=<?php echo $row->id ?>&name=<?php echo $row->topic?> >
                    <?php } ?>



                    <label>Comment</label>
                    <div class="form-group" align="left">

                        <textarea class="form-control"name="comment" required="" rows="3"></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-default" >Post</button>

                    </form>
                </div>
            </div>



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


