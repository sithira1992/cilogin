<?php


class Con_sewing_studies extends CI_Controller
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


        $this->load->view('Template/template');
        $this->load->view('Sewing_Studes');


    }

}