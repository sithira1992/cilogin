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
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Interview Call</h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i>Interview Call
                    </li>
                </ol>
            </div>
        </div>

        <?php foreach($applicant_details as $row) { ?>

        <form method="post" action="<?php echo base_url()."Con_manage_vacancy/InterviewCall/".$row->Email?>">

            <div class="row">
                <div class="col-lg-6">


                    <div class="form-group">
                        <label>Subject</label>

                        <textarea class="form-control" required="" name="subject" rows="5" placeholder="Enter subject here"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Received Email</label>
                        <input type='email' name="email" placeholder="<?php echo $row->Email?>" >
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" required="" name="message" rows="5" placeholder="Enter message here"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Send email</button>
                </div>
            </div>
        </form>

        <?php }?>

    </div>

</div>


</body>

</html>
