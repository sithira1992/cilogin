<div id="content" class="span10">
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
                            <i class="fa fa-edit"></i> ->Manage Requests
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="form-group">






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
<script src=js/jquery.js'></script>

<!-- Bootstrap Core JavaScript -->
<script src=<?php echo base_url('../assets/js/bootstrap.min.js')?>></script>

</body>
</html>






