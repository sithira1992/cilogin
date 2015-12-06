<?php
// form design

echo form_open("lol/validate") . "<br/>";
echo form_input("username", "Username") . "<br/> <br/>";
echo form_password("password", "password") . "<br/> <br/>";
echo form_submit("submit", "Login") . "<Br/> <Br/>";

echo anchor("lol/sign_up", "Create Account");

?>