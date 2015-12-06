<div id="content" class="span10">
    <div class="container-fluid">

    <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Home Page Image SlideShow
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="../index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> -> Slides
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
                <td><b>Image ID</b></td>
                <td><b>Image</b></td>
                <td><b>Main Title</b></td>
                <td><b>Sub Title</b></td>
                <td><b>Options</b></td>

            </tr>
            <?php foreach($data as $row) { ?>


            <tr>
                <td><?php echo $row->image_id; ?></td>
                <td><img src="<?php echo $row->path; ?>" height="160" width="400"></td>
                <td><?php echo $row->mtitle; ?></td>
                <td><?php echo $row->stitle;?></td>

                <td><a href=<?php echo base_url()?>Con_slideimg/?var1=<?php echo $row->image_id?> >Update</a> </td>

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
<script src=<?php echo base_url('../assets/js/jquery.js')?>></script>

<!-- Bootstrap Core JavaScript -->
<script src=<?php echo base_url('../assets/js/bootstrap.min.js')?>></script>

</body>
</html>






