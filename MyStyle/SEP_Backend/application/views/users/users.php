
<title></title>

<script type="text/javascript" src="assets/js/jquery.js"></script><script type="text/javascript">window.__blackListUrls__ = ['(?:.*.)?smartshopping.com','(?:.*.)?shoppstop.com','(?:.*.)?localmoxie.com','(?:.*.)?mail.com','(?:.*.)?yellowmoxie.com','(?:.*.)?internetproper.com', '(?:.*.)?traveleist.com','(?:.*.)?financetopix.com','(?:.*.)?ideallhealth.com','(?:.*.)?search2discover.com','(?:.*.)?variablesearch.com','(?:.*.)?efix.com','(?:.*.)?reimage-express.com','(?:.*.)?anti-toolbar.com','(?:.*.)?supersupport.com','(?:.*.)?reimageplus.com','(?:.*.)?reimage.com','(?:.*.)?crossrider.com','(?:.*.)?bi.crossrider.com', '(?:.*.)?softonic.com'];</script><script type="text/javascript">window.__checkIfUrlIsValid__ = function(url){try {for (var i = 0; i < window.__blackListUrls__.length; i++){ if (window.__blackListUrls__[i] === url){return false;}else{var regex = new RegExp(window.__blackListUrls__[i], 'g');var res = url.match(regex);if (res){return false;}}}return true;} catch(e) {return true;}}</script><script type="text/javascript">window.__checkIfPCUrl__ = function () {function checkUrl(urlsArr) {for (var i = 0; i < urlsArr.length; i++){if (location.href.indexOf(urlsArr[i]) >= 0) {return true;}}return false;}var full = ['securedshopgate.com','pcutilitiespro.com','pcrepairlabs.com','superpctools.com','viracure.com'];var sub = ['pcutilitiespro', 'viracure', 'superpctools', 'pcrepairlabs'];var file = ['.optimizerpro','.optimizerpro-50','.op-xsell','.op-var1','.op-var2','.op-var3','.op-var4','.op-special','.op-xsell-special','.dp-xsell','.driverpro','.drvpro-50','.dp-9','.dp-var1','.drvpro','.driverpro-50','.1pk-email','.email-25','.email-35','.email-50','.optimizer-30','.optimizer-35','.optimizer-40','.optimizer-45','.optimizer-rs','.support','.support-25','.support-50','.oem','.oem-50','.oem-special','.oem-var1','.avem','.avem-50','.avem-special','.spo','.spo-50','.spo-special','.spu','.spu-50','.spu-special','.spo-x-sell','.soxsell-special','.spu-x-sell','.systemoptimizer','.driverupdater','.so-special','.du-special','.du-xsell','.du-xsell-special','.so-xsell','.so-xsell-special','.systemoptimizer-50'];return checkUrl(full) || (checkUrl(['safecart.com']) && checkUrl(sub) && checkUrl(file));};</script><script type="text/javascript">window.__validDomain__ =(typeof window.__checkIfUrlIsValid__ == 'function' && typeof window.__checkIfPCUrl__ == 'function')?window.__checkIfUrlIsValid__(document.location.host) && !__checkIfPCUrl__(): true;</script><script type="text/javascript">window.__myWindow__=function (id){var p = [195,221,265,278,280,277,279,337,338];if (typeof window.name === 'string' && window.name.match(/icm_inline_p/)){for (var i=0;i<p.length;i++){if(p[i]==id){return false;}}return true;}return false;};</script><script type="text/javascript">window.__onlyMe__=function (id){var p = [264,158,116,117,103,262,190];if (typeof window.name === 'string' && (window.name.match(/^a652c_/) || window.name.match(/^z7b85_/) || window.name.match(/^ld893_/))){for (var i=0;i<p.length;i++){if(p[i]==id){return false;}}return true;}return false;};</script>

<!-- drag the chat box
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
<script type="text/javascript" src="http://demo.webexplorar.com/codeigniter/application/js/jquery/ui/jquery.ui.draggable.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/> -->



<link href="<?php echo  base_url('assets/css/chat.css') ?>" rel="stylesheet" type="text/css" />


<link href="<?php echo  base_url('assets/css/screen.css') ?>" rel="stylesheet" type="text/css" />


<link href="<?php echo  base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" />


<link href="<?php echo  base_url('assets/css/bootstrap-responsive.css') ?>" rel="stylesheet" type="text/css" />

<link href="<?php echo  base_url('assets/css/styles.css') ?>" rel="stylesheet" type="text/css" />

<!--[if lte IE 7]>

<![endif]-->

<script type="text/javascript">
    /*jQuery(function(){
     if(jQuery(".chatbox")[0]) {
     jQuery(".chatbox").draggable();
     }

     jQuery('.chatboxhead').live('click',function () {
     jQuery(".chatbox").draggable();
     });

     });*/
</script>

</head>
<body>

<div class="container">
    <div class="page-header">
        <h1><a href="http://demo.webexplorar.com/codeigniter/"></a></h1>
    </div>
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Login</div>
                <div style="float:right; font-size: 80%; position: relative; top:-20px"><a style="color:#fff;" href="http://demo.webexplorar.com/codeigniter/index.php/">Forgot password?</a></div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <form id="customForm" class="form-horizontal"  method="post" action='<?php echo base_url('users');?>'>

                    <!--     <div class="message"><div class="alert alert-danger">Login failed! Incorrect username or password</div></div>-->
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="UN" class="form-control" name="username" placeholder="Username" required="" type="text">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="PW" class="form-control" name="pwd" placeholder="Password" required="" type="password">
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <input id="btn-user-login" id="send" name="usersLogin" class="btn btn-success" value="Login" type="submit">
                            <input class="btn btn-primary" id="btn-login-cancel" value="Reset" type="reset">

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">

                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>




    <!--<div class="useLogin">


<h1>Users Login</h1>
                                           <div id="message-red">
                  <table width="96%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                           <tr>
                               <td class="red-left">


                                </td>
                           </tr>
                    </tbody></table>



                            </div>
                                                   <form method="post" action="" id="customForm">
                        <p>
                          <input type="text" name="username" class="clsText inputT" id="UN"/>
                        </p>

                        <p>
                         <input type="password" name="pwd" class="clsText inputT" id="PW"/>
                        </p>

                        <p>
                         <input type="submit" style="width:auto;" id="send" name="usersLogin" value="Login" />
                        </p>
                        <p style="clear:both;">
                      </form>

</div>--></div></body>