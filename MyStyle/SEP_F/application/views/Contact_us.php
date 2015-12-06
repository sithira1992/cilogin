<!DOCTYPE HTML>

<div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <div class="main_grid1">

        <h2 align="center">Contact Us</h2>

        <div class="clearfix"></div>
    </div>
</div>
<div class="row" align="left">


    <!--<form action="contact.php" method="post">-->
    <table border="0" width="800" height="200" align="center">
        <tr><td>
                <table width="400" border="0" cellspacing="" cellpadding="">

                    <form id="form1" method="post" class="form-control" action="<?php echo base_url('Con_Contact_us/insert')?>">


                        <tr>
                            <td width="" class="bodytext"> Name:</td>
                            <td width=""><input name="name" type="text" class="form-control" id="name" size="32" placeholder="Your Name"></td>
                        </tr>
                        <tr>
                            <td class="bodytext">Contact No:</td>
                            <td><input name="Contact_no" type="tel" class="form-control" required="" id="phone" size="32" placeholder="Contact No" ></td>
                        </tr>
                        <tr>
                            <td class="bodytext">Email:</td>
                            <td><input name="email"  id="email" class="form-control" type="email" placeholder="email"></textarea></td>
                        </tr>

                        <tr>
                            <td class="bodytext">Product</td>
                            <td><textarea name="product"  id="product" size="32" placeholder="Product" class="form-control" ></textarea></td>
                        </tr>
                        <tr>
                            <td class="bodytext">Service Category</td>
                            <td><select class="form-control" name="cat" id="nearest_branch">
                                    <option value="" selected="Select">Select</option>
                                    <?php foreach($maincat as $row){?>
                                        <option value="<?php echo $row->cat_name?>"><?php echo $row->cat_name?></option>
                                    <?php } ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="bodytext">Subject</td>
                            <td><select class="form-control" name="subject" id="nearest_branch">
                                    <option value="" selected="select">Select</option>
                                    <option value="Quatation">Quatation</option>
                                    <option value="Error">Error</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="bodytext">Description</td>
                            <td><textarea name="description" class="form-control"   id="inqure" size="32" placeholder="Inquire" ></textarea></td>
                        </tr>

                        <tr>
                            <td class="bodytext"> </td>
                            <td align="left" valign="top">
                                <div id="rtn_msg"></div></td>
                        </tr>

                        <tr>
                            <td class="bodytext"> </td>
                            <td align="left" valign="top">
                                </br>
                                </br>
                                <button type="reset" class="btn btn-default" onclick="resetForm();">Reset</button>
                                <input type="submit" name="Submit"  class="btn btn-default btn-warning" value="Send" ><!--onclick="sendmail">--></td>
                        </tr>
                        </td>


                    </form>

                </table>

            </td>
            <td>


                <?php foreach($contact as $row) {?>

                <p class="para"
                   Dinal Fernando</br>

                   <h3> My Style International</h3>
                    <h3>Address</h3>
                   <h4> <?php echo $row->Address ?></h4>

                   <h3>Telephone</h3>
                   <h4><?php echo $row->Telephone ?></h4>

                   <h3>E-Mail</h3>
                   <h4>E-Mail:www.mystyleinternational.com</h4>

                   <h3>Hot Line</h3>
                   <h4><?php echo $row->Hotline ?></h4>

                <?php } ?>

            </td>
    </table>



</div>
</div>
</div>
<head> <?php echo $map['javascript']; ?> </head>
<?php echo $map['mapdiv']; ?>
</body>
</html>