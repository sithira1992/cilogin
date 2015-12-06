
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
                            <i class="fa fa-edit"></i> Forms
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
                        <textarea class="form-control"name="tel" rows="5" placeholder="<?php echo $row->Telephone ?>"></textarea>
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

    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
