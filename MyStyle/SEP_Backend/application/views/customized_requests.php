<?php

  ?>

<section class="content">

    <div class="col-lg-12">


        <h1>Requested Orders</h1>

        <?php echo "<h4 style='color:#ff4538'>" .$error."</h4>"; ?>

        <?php foreach($order_details as $dataObject1) {?>

            <div class="box box-default collapsed-box box-solid">

                <div class=" box-header with-border">

                    <div class="order_requested">

                        <div class="pull-left">
                            <h5>Quantity:<?php echo $dataObject1->quantity; ?></h5>
                            <h5>size:<?php echo $dataObject1->size; ?></h5>
                            <h5>Submitted Date: <?php echo $dataObject1->date_submitted; ?></h5>
                        </div>

                        <div class="pull-right">
                            <h5>Status : <?php echo $dataObject1->date_submitted; ?></h5>
                            <h5>Type:Regular T-shirt</h5>
                            <h5>File Uploaded : <a href="<?php echo base_url($dataObject1->file_url);?>" download>File</a></h5>
                        </div>

                        <div class="description">
                            <h5><strong>Description : <?php echo $dataObject1->description; ?></strong></h5>
                        </div>

                        <button class="btn btn-primary a" data-toggle="collapse" data-id="<?php echo $dataObject1->order_request_id?>" data-target="#collapse<?php echo $dataObject1->order_request_id?>">
                            <i class="fa fa-chevron-down"></i>
                        </button>

                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div id="collapse<?php echo $dataObject1->order_request_id?>" class="panel-collapse collapse">

                    <div class="orderBody<?php echo $dataObject1->order_request_id?>">

                    </div>
                </div><!-- /.box-body -->
            </div>
        <?php } ?>
    </div>

</section>