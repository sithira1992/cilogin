<?php

class Con_home extends CI_Controller
{

    function index($message = "")
    {

        $error['message'] = $message;

        $this->load->view('Product/product_add', $error);
    }
}