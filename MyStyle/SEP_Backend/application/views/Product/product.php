

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

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" method="post" action="<?php echo base_url('Con_product/do_upload');?>">

                        <div class="form-group">
                            <label>Product name</label>
                            <input type="text" name="product_name" class="form-control">

                        </div>

                        <div class="form-group">
                            <label></label>
                            <input name="upload" class="form-control">

                        </div>



                        <div class="form-group">
                            <label>Product image</label>
                            <input name="upload" id="upload" type="file">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>


                        <div class="form-group">
                            <label>Selects</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>



                        <button type="submit" class="btn btn-default" >Submit Button</button>

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
