<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Style Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>

    <div id="page-wrapper">

        <div class="container-fluid">
                <!-- Page Heading -->
              <div class="row">
                  <div class="col-lg-12">
                    <h1 class="page-header">Manage vacancy</h1>
                      <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i>Manage vacancy
                        </li>
                      </ol>
                </div>
              </div>

            <table border="0" width="1100" height="200" align="center">
                <tr>
                    <td>
                        <table width="1000" border="0" cellspacing="10" cellpadding="10">
                            <form id="form1" method="post" class="form-control" action="<?php echo base_url('Con_manage_vacancy/FilterVacancy')?>">
                                <td>
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
                                </td>
                                <td>
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
                                </td>
                                <td>
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
                                </td>

                                <td></td>
                                <td>
                                    <td class="bodytext"> </td>
                                    <td align="center" valign="top">
                                        <input type="submit" name="Submit"  class="btn btn-default btn-warning" value="Filter" >
                                    </td>
                                </td>

                                <tr></tr>
                                <tr>
                                        <div class="details">
                                            <?php $count =0 ?>
                                                 <?php foreach($vacancy_details as $row) {?>
                                                     <?php if( $count!=0 && $count>0){?>
                                                         <div class="span_of_4">
                                                     <?php }?>
                                                        <?php $count =$count+1 ?>
                                                <?php } ?>
                                                    <?php if( $count == 0) {?>
                                                        <h4 align="center" family="Tahoma">No Such Related Result Found Under The Selected Category</h4>
                                                    <?php }?>
                                                        </div>
                                        </div>
                                </tr>

                            </form>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered" width ="50">
                <td><b>Id</b></td>
                <td><b>Name</b></td>
                <td><b>Age</b></td>
                <td><b>Gender</b></td>
                <td><b>Phone</b></td>
                <td><b>Address</b></td>
                <td><b>Education</b></td>
                <td><b>Skill</b></td>
                <td><b>Experience</b></td>
                <td><b>Applied Field</b></td>
                <td><b>CV</b></td>
                <td><b>Send Mail</b></td>

                <?php foreach($vacancy_details as $row) { ?>
                <tr>
                    <td><?php echo $row->Id?></td>
                    <td><?php echo $row->Name?></td>
                    <td><?php echo $row->Age?></td>
                    <td><?php echo $row->Gender?> </td>
                    <td><?php echo $row->Phone?> </td>
                    <td><?php echo $row->Address?></td>
                    <td><?php echo $row->Education?></td>
                    <td><?php echo $row->Skill?></td>
                    <td><?php echo $row->Experience?></td>
                    <td><?php echo $row->Applied_field?></td>
                    <td><a href="./<?php echo $row->CV?>" download="<?php echo $row->Name?>'s CV">Download the CV</a>
                    </td>
                    <td> <a href="<?php echo base_url() . "Con_manage_vacancy/AppicantDetails/" . $row->Id; ?>" title="Send Email"><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </table>

        </div>

    </div>

</body>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


</html>
