
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

<link href="<?php echo  base_url('assets/Ratings/css/style.css') ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('assets/Ratings/js/jquery.min.js')?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('assets/Ratings/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/Ratings/js/main.js')?>"></script>



<!-- Custom Fonts -->
<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <div id="page-wrapper">
                <h3><b>Customer Feedback</b></h3>
    </div>
            </br></br>

            <div class="row">
                <div class="col-lg-6">
                </div>
                <!-- /.row -->
            </div>
                <div align="Right">
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
                <td></td>
                    <tr>
                        <td></td><td></td><td></td><td></td><td></td>
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
                            <td></td><td></td><td></td><td></td><td></td>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->count1; ?></td>
                            <td><?php echo $row->count2;?></td>
                            <td><?php echo $row->count3;?></td>
                            <td><?php echo $row->count4;?></td>
                            <td><?php echo $row->count5;?></td>
                            <td>  <font size="2" color="red"> Ratings</font>
                                <div id="rate" name="rate" class="rating col-md-13 <?php echo $row->avg ?>"><?php echo $row->avg ?></div>
                            </td>
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






</html>

