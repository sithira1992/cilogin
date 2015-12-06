<!DOCTYPE HTML>
<div class="container">
    <div class="main_grid1">

        <h2 align="center"> About Us </h2>

        <div class="clearfix"></div>
    </div>
</div>

<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="details">
            <a href="./assets/images/Coding Standards Original.pdf" download=" CV">Download the CV</a>
            <?php foreach($about as $row) {?>
        <img src=<?php echo base_url($row->img_path)?> align="center"  alt="" class="img-responsive" height="200" width="200"/>
            <h2>About Us </h2>
            <p class="para">


                <?php echo $row->about_us ?>

                <?php } ?>



            <h2>History </h2>
            <?php foreach($about as $row) {?>
            <p class="para">
                <?php echo $row->History ?>

                <?php }?>




            <h2>Chairman's Message </h2>
            <?php foreach($about as $row) {?>
            <p class="para">
                Dear Sir / Madam</br>


                <?php echo $row->Chmn_msg ?>

                <?php }?>

            </p>

            </li>
            <p class="para">
                Dinal Fernando</br>
                My Style International</p>
            </li>
            <h2>Our Values </h2>
            <p class="para"></p>
            <li><p class="para">Accountability</li>
            <li><p class="para">Loyalty</li>
            <li><p class="para">Intergrity</li>
            <li><p class="para">Creativity</li>
            <li><p class="para">Continuous Improvement</li>
            <li><p class="para">Customer Delight</li>
            <li><p class="para">Intergrity</li>
            <li><p class="para">Innovation</li>



            <a href="Con_index" class="btn">eE</a>
        </div>
    </div>
</div>



</body>
</html>