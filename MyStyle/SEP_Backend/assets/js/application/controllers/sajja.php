<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/21/2015
 * Time: 6:18 PM
 */
class Sajja extends CI_Controller
{


    function index()
    {   // function of loading login page
        $data['main_content'] = "login_form";   // name of login page

        $this->load->view("sample", $data);
    }


}