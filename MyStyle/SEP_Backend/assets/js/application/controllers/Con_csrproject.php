<?php


class Con_csrproject extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {


        $user_name = $this->session->userdata('user_name');
        $data['user_name']=$user_name;


        $this->load->view('header',$data);
        $this->load->view('CSR_Projects');
        $this->load->view('footer');

    }

}