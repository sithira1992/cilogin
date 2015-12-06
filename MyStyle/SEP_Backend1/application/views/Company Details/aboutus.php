<div id="content" class="span10">
    <div class="container-fluid">


        <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Manage About Us
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="../index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> -> About Us
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <form method="post" action="<?php echo base_url('Con_about_us/insert')?>">
            <div class="row">
                <div class="col-lg-6">
                    <?php echo form_open_multipart('Con_about_us/insert');?>
                        <div class="form-group">
                            <label>Chairman's Photo</label>
                             <input type="file" name="chmn_photo" size="20"  />
                        </div>

                        <div class="form-group">
                            <label>About Us</label>
                            <?php foreach($details as $row) {?>
                            <textarea class="form-control"name="about_us" rows="5" placeholder="<?php echo $row->about_us ?>"></textarea>


                        </div>

                        <div class="form-group">
                            <label>History</label>
                            <textarea class="form-control"name="history" rows="5" placeholder="<?php echo $row->History ?>"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Chairman's Message</label>
                            <textarea class="form-control"name="chms_msg" rows="5" placeholder="<?php echo $row->Chmn_msg ?>"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Save Details</button>
                <?php } ?>
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
