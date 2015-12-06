<html xmlns="http://www.w3.org/1999/html">

</body>

<meta charset="utf-8" />

<link href="<?php echo  base_url('../assets/comments/css/style.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo  base_url('../assets/comments/css/example.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../assets/comments/jquery.min.js"></script>

<div class="main_bg">
    </br></br>
    <h1 align="center"><?php echo $var1 ?></h1>
    </br></br>

    <?php

    $id_post = "1"; //the post or the page id
    ?>



    <table border="0" align="center" width="800"  >

        <tr>

            <td>
                <img align="left" src="<?php echo $var2->path ?>" height="250" width="200">
            </td>
            <td>

                <h3 align="left" g> <?php echo $var2->description ?>  </h3></br></br></br>


            </td>
        </tr>
        <tr>
            <td>

                <script>
                    function fbShare(url, title, descr, image, winWidth, winHeight) {
                        var winTop = (screen.height / 2) - (winHeight / 2);
                        var winLeft = (screen.width / 2) - (winWidth / 2);
                        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
                    }
                </script>


            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <a href="javascript:fbShare('www.mystyleinternational.com', 'MyStyleInternational', '<?php echo $var2->description?>','http://goo.gl/dS52U', 520, 350)">
                    <img src="<?php echo base_url('/assets/images/fb.png/')?>" class="img-responsive" alt=""/>
                </a>
            </td>
        </tr>


    </table>
</div>
</br></br></br>

<script type="text/javascript">
    $(function(){
        //alert(event.timeStamp);
        $('.new-com-bt').click(function(event){
            $(this).hide();
            $('.new-com-cnt').show();
            $('#name-com').focus();
        });

        /* when start writing the comment activate the "add" button */
        $('.the-new-com').bind('input propertychange', function() {
            $(".bt-add-com").css({opacity:0.6});
            var checklength = $(this).val().length;
            if(checklength){ $(".bt-add-com").css({opacity:1}); }
        });

        /* on clic  on the cancel button */
        $('.bt-cancel-com').click(function(){
            $('.the-new-com').val('');
            $('.new-com-cnt').fadeOut('fast', function(){
                $('.new-com-bt').fadeIn('fast');
            });
        });

        // on post comment click
        $('.bt-add-com').click(function(){
            //var theCom = $('.the-new-com');
            //var theName = $('#name-com');
            //var theMail = $('#mail-com');


            $.ajax({
                url: '/MyStyle/SEP_F/Con_comments?var1=<?php echo $var1 ?>',
                type: 'POST',
                data: $("#myForm1").serialize(),


                //     data: 'topic : <?php echo $var1?>, name=theName.val(),email= theMail.value(),comment =theCom.value(),id_post='2' ,
                //  data:'act= add-com & id_post='+<?php echo $var1; ?>+'&name='+theName.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
                //   success: function(html){

                //     $('.cmt-container').load('/MyStyle/SEP_F/Con_comments?var1=<?php echo $var1 ?>');
                //  $('.new-com-cnt').hide('fast', function(){
                //     $('.new-com-bt').show('fast');
                //     $('.new-com-bt').before(html);
                //      $('#cmt-container').load();
                //        $('#cmt-container').focus();
                //   })
                //   }
            });

        });

    });
</script>



<div class="cmt-container" >
    <h3>Comments -</h3>
    </br>
    <?php foreach ($comments as $row) {?>

        <div class="cmt-cnt">
            <?php if($row->name != "MyStyle"){?>
                <img src="<?php echo base_url('../assets/comments/img/profile-img.jpg') ?>" />
            <?php }?>

            <?php if($row->name == "MyStyle"){?>

                <img src="<?php echo base_url('../assets/comments/img/admin.JPG') ?>" />
            <?php }?>
            <div class="thecom">
                <h5><?php echo $row->name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $row->date; ?></span>
                <br/>
                <p>
                <h4><?php echo $row->comment; ?></h4>
                </p>
            </div>
        </div><!-- end "cmt-cnt" -->

    <?php }?>

    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>

    <div class="new-com-cnt">
        <form method="post" name="myForm1" id="myForm1">
            <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" required=""/>
            <input type="email" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" required="" />
            <textarea class="the-new-com" id="comment" name="comment"></textarea>
            <input type="submit" class="bt-add-com" name="bt-add-com" id="bt-add-com" value="Post Comment">
            <div class="bt-cancel-com">Cancel</div>
        </form>
    </div>

    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->



</body>
</html>