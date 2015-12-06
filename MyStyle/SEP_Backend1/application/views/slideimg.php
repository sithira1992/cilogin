<div id="content" class="span10">
    <div class="container-fluid">


    <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Manage Slide Show details
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="../index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> -> Slides -> Slideimg
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="form-group">

            </div>
            </br>




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
    <script src=<?php echo base_url('../assets/js/jquery.js')?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo base_url('../assets/js/bootstrap.min.js')?>></script>

</body>






</html>

