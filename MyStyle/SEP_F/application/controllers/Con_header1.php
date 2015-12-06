<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/18/2015
 * Time: 9:52 PM
 */

class Con_header1 extends CI_Controller
{

    function index($message = "")
    {

        $error['message'] = $message;
        $data['css1'] = base_url('assets/css/demo.css');
        $data['css2'] = base_url('assets/css/style.css');


        //    $this->load->view('layout/header', $data);
        $this->load->view('layout/header1', $error);
        //    $this->load->view('layout/footer');
    }


}