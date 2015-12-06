<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" xmlns="http://www.w3.org/1999/html"/>

<script type="text/javascript" src="assets/js/formValidation.js"></script>


<body>

  </div></div>
    <div  class="form">

        <h2>Sign Up Menu For New Members</h2>
        </br>
        </br>
        <form id="contactform" method="post" action='<?php echo base_url('con_signup/insert');?>'>
            <p class="contact"><label for="name">Name</label></p>
            <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text">

            <p class="contact"><label for="email">Email</label></p>
            <input id="email" name="email" placeholder="example@domain.com" required="" type="email">


            <p class="contact"><label for="password">Create a password</label></p>
            <input type="password" id="password" name="password" required="">
            <p class="contact"><label for="repassword">Confirm your password</label></p>
            <input type="password" id="repassword" name="repassword" required="">

            <select class="select-style gender" name="gender">
                <option value="select">i am..</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="others">Other</option>
            </select><br><br>

            <p class="contact"><label for="phone">Mobile phone</label></p>

            <input id="phone" name="phone" placeholder="phone number" required="" type="text" onchange="validatePhone('phone','errmsg')"> <br>
<div id="errmsg"></div>
            </br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit">
            </br>

          <h3> <a href="login_controller">click here to login</a></h3>
        </form>
    </div>
</div>

</body>
</html>
