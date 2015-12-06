<?php

class Con_home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index($message = "")
    {

        $error['message'] = $message;
        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;

        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;
        $this->load->view('Tempelate/tempalete',$data);
        $this->load->view('home',$data ,$error);


    }
}