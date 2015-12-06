<?php
 ?>

<div class="box box-secondary">
    <div class="box-header with-border">
        <h3 class="box-title">Canvas Background Images</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">

        <form action='<?php echo base_url('design_material_con/canvas_bg_img_event_handler'); ?>' method='post' class='cls'>
            <table id="canvas_background_images" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th style="display:none">Id</th>
                    <th>image name</th>
                    <th>Design for</th>
                    <th>side</th>
                    <th>colour</th>
                    <th>link</th>
                    <th>modify</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach ($canvas_background as $dataObj){
                    echo "<tr> \n";
                    echo "<td style='display:none'>".$dataObj->bg_img_id."</td>";
                    echo "<td>".$dataObj->name."</td>";
                    echo "<td>".$dataObj->gender."</td> \n";
                    echo "<td>".$dataObj->side."</td> \n";
                    echo "<td>".$dataObj->color."</td> \n";
                    echo "<td>".$dataObj->image_url."</td> \n";
                    echo "<td> \n";
                    echo "<button class='btn edit' type='button'><i class='fa fa-pencil'></i></button> \n";
                    echo "<button class='btn delete' type='submit' value='delete' name='trash_btn'><i class='fa fa-trash-o'></i></button> \n";
                    echo "</td> \n";
                    echo "<tr> \n";
                }
                ?>
                </tbody>
            </table>
            <div class="center-block lastRow"><button class='btn add canvas_background_images' type='button' name="add_btn" data-table="canvas_background_images"><i class='fa fa-plus-square'></i> Add New Record </button></div>
        </form>
    </div>

    <div class="box box-secondary">
        <div class="box-header with-border">
            <h3 class="box-title">Canvas Background Images</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">

            <?php echo form_open_multipart('design_material_con/upload');?>
            <table id="canvas_graphics" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th style="display:none">Id</th>
                    <th>Name</th>
                    <th>modify</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach($canvas_designs as $dataObj){
                    echo "<tr> \n";
                    echo "<td style='display:none'>".$dataObj->graphics_id."</td>";
                    echo "<td>".$dataObj->name."</td>";
                    echo "<td>".$dataObj->file_url."</td> \n";
                    echo "<td> \n";
                    echo "<button class='btn edit' type='button'><i class='fa fa-pencil'></i></button> \n";
                    echo "<button class='btn delete' type='submit' value='delete' name='trash_btn'><i class='fa fa-trash-o'></i></button> \n";
                    echo "</td> \n";
                    echo "<tr> \n";
                }
                ?>
                </tbody>
            </table>
            <div class="center-block lastRow"><button class='btn add canvas_graphics' type='button' name="add_btn" data-table="canvas_graphics"><i class='fa fa-plus-square'></i> Add New Record </button></div>
            </form>
        </div>