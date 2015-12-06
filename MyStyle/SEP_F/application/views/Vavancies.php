
<!DOCTYPE HTML>
<div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <div class="main_grid1">

        <h2 align="center">Career</h2>

        <div class="clearfix"></div>
    </div>
</div>
<script type="text/javascript" src="assets/js/formValidation.js"></script>
<div class="row" align="left">

    <!--<form action="contact.php" method="post">-->
    <table width="1000" height="500" align="center" >
        <tr>
            <td>
                <table width="450" cellspacing="" cellpadding="">
                    <form id="form1" method="post" class="form-control" action="<?php echo base_url('Con_vacancies/insert')?>">
                       <td>
                        <tr>
                           <?php echo form_open_multipart('Con_vacancies/insert');?>
                           <td width="" class="bodytext"> Attach CV:</td>
                             <td> <input type="file" name="cv" size="20"  /></td>
                        </tr>
                        <tr>
                            <td width="" class="bodytext"> Name:</td>
                            <td width=""><input name="name" type="text" class="form-control" id="name" size="32" placeholder="Your Name"></td>
                        </tr>
                        <tr>
                            <td class="bodytext">Age:</td>
                            <td><input name="age" type="text" class="form-control" required="" id="age" size="32" placeholder="Age" ></td>
                        </tr>
                        <tr>
                            <td class="bodytext">Gender:</td>
                            <td>
                                <input type="radio" name="gender"
                                   <?php if (isset($gender) && $gender=="female") echo "checked";?>
                                   value="female">Female
                                   <input type="radio" name="gender"
                                   <?php if (isset($gender) && $gender=="male") echo "checked";?>
                                   value="male">Male
                            </td>
                        </tr>
                        <tr>
                            <td class="bodytext">Contact No:</td>
                            <td><input name="phone" class="form-control" required="" id="phone" size="10" placeholder="Contact No" type="text" ></td>
                            <div id="errmsg"></div>
                        </tr>
                        <tr>
                            <td class="bodytext">Email:</td>
                            <td><input name="email"  id="email" class="form-control" type="email" placeholder="email"></textarea></td>
                        </tr>
                        <tr>
                            <td class="bodytext">Address</td>
                            <td><textarea name="address" class="form-control"   id="address" size="32" placeholder="address" ></textarea></td>
                        </tr>
                        <tr>
                            <td class="bodytext">Applied Field</td>
                            <td>
                                <select class="form-control" name="applied_field" id="applied_field">
                                    <option value="" selected="select">Select</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Excecutive">Excecutive</option>
                                    <option value="Software">Software</option>
                                    <option value="Hardware">Hardware</option>
                                    <option value="Printing">Printing</option>
                                    <option value="Accounts">Accounts</option>
                                    <option value="Other">Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="bodytext">Education</td>
                            <td>
                                <select class="form-control" name="education" id="education">
                                    <option value="" selected="select">Select</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Higher_Diploma">Higher Diploma</option>
                                    <option value="Degree">Degree</option>
                                    <option value="sp_Degree">Special Degree</option>
                                    <option value="Other">Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="bodytext">Skill</td>
                            <td>
                                <textarea name="skill" class="form-control" id="skill" size="32" placeholder="skills" ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="bodytext">Experience</td>
                            <td>
                                <select class="form-control" name="experience" id="experience">
                                    <option value="" selected="select">Select</option>
                                    <option value="6_Months">6 Months</option>
                                    <option value="1">1 Year</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="5">More than 5 Years</option>
                                </select>
                            </td>
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
                            <input type="submit" name="Submit"  class="btn btn-default btn-warning" value="Apply" ></td>
                        </tr>
                       </td>
                </form>
                    </td>
                    </tr>
    </table>
            <td>
                <div class="details">
                    <?php foreach($vacancy as $row) {?>
                        <h3><?php echo $row->Title ?></h3>
                            <img src=<?php echo base_url($row->Add)?> align="center"  alt="" class="img-responsive" height="150" width="350"/>
                            <?php } ?>
                </div>
            </td>

    </table>
</div>

</body>
</html>